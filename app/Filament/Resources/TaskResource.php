<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TaskResource\Pages;
use App\Filament\Resources\TaskResource\RelationManagers;
use App\Filament\Widgets\LocationMapTableWidget;
use App\Models\Task;
use Cheesegrits\FilamentGoogleMaps\Fields\Geocomplete;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;

class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $navigationIcon = 'heroicon-c-list-bullet';

    protected static ?string $navigationLabel = 'Current Tasks';
    protected static ?string $navigationGroup = 'Tasks & Dispatch';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Grid::make(2)
                        ->schema([
                            Select::make('user_id')
                                ->relationship('user', 'name')
                                ->required(),
                            Select::make('status')
                                ->options([
                                    'sent' => 'Sent',
                                    'accepted' => 'Accepted',
                                    'rejected' => 'Rejected',
                                    'in_progress' => 'In Progress',
                                    'completed' => 'Completed',
                                ])
                                ->default('sent')
                                ->required(),
                        ]),

                    Textarea::make('description')
                        ->required(),
                    Grid::make(2)
                        ->schema([
                            DateTimePicker::make('expected_start')
                                ->seconds(false)
                                ->displayFormat('d/m/Y H:i')
                                ->required(),
                            DateTimePicker::make('completed_by')
                                ->displayFormat('d/m/Y H:i')
                                ->seconds(false)
                                ->required(),
                        ]),


                    Geocomplete::make('full_address')
                        ->maxLength(1024)
                        ->prefix('Choose:')
                        ->placeholder('Start typing an address ...')
                        ->geolocate() // add a suffix button which requests and reverse geocodes the device location
                        ->geolocateIcon('heroicon-o-map'), // override the default icon for the geolocate button

                    Grid::make(2)
                        ->schema([
                            Hidden::make('lng'),
                            Hidden::make('lat'),
                        ]),
                    Map::make('location')
                        ->mapControls([
                            'mapTypeControl' => true,
                            'scaleControl' => true,
                            'streetViewControl' => true,
                            'rotateControl' => true,
                            'fullscreenControl' => true,
                            'searchBoxControl' => false, // creates geocomplete field inside map
                            'zoomControl' => true,
                        ])
                        ->reactive()
                        ->afterStateUpdated(function ($state, callable $get, callable $set) {
                            $set('latitude', $state['lat']);
                            $set('longitude', $state['lng']);
                        })
                        ->height(fn() => '400px') // map height (width is controlled by Filament options)
                        ->defaultZoom(5) // default zoom level when opening form
                        ->autocomplete('full_address') // field on form to use as Places geocompletion field
                        ->autocompleteReverse(true) // reverse geocode marker location to autocomplete field
                        ->reverseGeocode([
                            'street' => '%n %S',
                            'city' => '%L',
                            'state' => '%A1',
                            'zip' => '%z',
                        ]) // reverse geocode marker location to form fields, see notes below
                        ->debug() // prints reverse geocode format strings to the debug console 

                        //52.48210108722186, -2.0709417619151815
                        ->defaultLocation([52.48210108722186, -2.0709417619151815])
                        ->draggable() // allow dragging to move marker
                        ->clickable(false) // allow clicking to move marker
                        ->geolocate() // adds a button to request device location and set map marker accordingly
                        ->geolocateLabel('Get Location') // overrides the default label for geolocate button
                        ->geolocateOnLoad(true, false), // geolocate on load, second arg 'always' (default false, only for new form))
                    Textarea::make('additional_information'),
                ])
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('user.image_url')
                    ->label('Avatar')
                    ->size(40)
                    ->circular(),
                TextColumn::make('user.name')->label('Assigned To'),
                TextColumn::make('description'),
                TextColumn::make('expected_start')->label('Expected Start')
                    ->dateTime('H:i, j M'),
                TextColumn::make('updated_at')
                    ->dateTime('H:i, j M'),
                TextColumn::make('status')
                    ->badge()
                    ->icon(fn(string $state): string => match ($state) {
                        'sent' => 'heroicon-m-document-check',
                        'accepted' => 'heroicon-o-clock',
                        'in_progress' => 'heroicon-o-arrow-path',
                        'completed' => 'heroicon-c-check-circle',
                        'rejected' => 'heroicon-o-x-circle',
                    })
                    ->color(fn(string $state): string => match ($state) {
                        'sent' => 'gray',
                        'accepted' => 'warning',
                        'in_progress' => 'info',
                        'completed' => 'success',
                        'rejected' => 'danger',
                    }),
                TextColumn::make('latitude')->label('Location'),
            ])
            ->filters([
                SelectFilter::make('user_id')->relationship('user', 'name'),
                SelectFilter::make('status')
                    ->options([
                        'sent' => 'Sent',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                        'in_progress' => 'In Progress',
                        'completed' => 'Completed',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }

    // Add this method to register widgets
    public static function getWidgets(): array
    {
        Log::info('Registering widgets');
        return [
            LocationMapTableWidget::class,
        ];
    }

    public static function getHeaderWidgets(): array
    {
        Log::info('Including header widgets');
        return [
            LocationMapTableWidget::class,
        ];
    }
}
