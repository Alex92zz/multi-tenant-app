<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeterVerificationTestResource\Pages;
use App\Models\MeterVerificationTest;
use Cheesegrits\FilamentGoogleMaps\Concerns\InteractsWithMaps;
use Cheesegrits\FilamentGoogleMaps\Fields\Geocomplete;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;
use Filament\Actions\Action;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Components\TagsInput;
use App\Models\User;
use What3words\Geocoder\Geocoder;
use What3words\Geocoder\AutoSuggestOption;
use Filament\Forms\Set;

class MeterVerificationTestResource extends Resource
{

    use InteractsWithMaps;
    protected static ?string $model = MeterVerificationTest::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Verification Forms';

    protected static $lng;
    protected static $lat;


    // Setter for lng property
    public static function setLng($lng)
    {
        static::$lng = $lng;
    }

    public static function setLat($lat)
    {
        static::$lat = $lat;
    }

    public static function getLng()
    {
        return static::$lng;
    }

    public static function getWhatThreeWords()
    {
        $lng = MeterVerificationTestResource::getLng();
        Log::info('lng in function: ' . $lng);
        $lat = MeterVerificationTestResource::getLat();
        Log::info('lat in function: ' . $lat);
        $api = new Geocoder("4JEMWPRY");

        $result = $api->convertTo3wa('52.487521098871504', '-2.0612195122900085');

        Log::info('Displayng what 3 words: ' . json_encode($result['words']));
    }

    public static function getLat()
    {
        return static::$lat;
    }

    public static function form(Form $form): Form
    {

        $users = User::all();
        $userNames = $users->pluck('name');

        return $form
            ->schema([
                Card::make()->schema([
                    Wizard::make([
                        Step::make('4-Meter Verification Test')
                            ->schema([

                                Hidden::make('user_id')
                                    ->label('User Logged In')
                                    ->default(Auth::id()),

                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('site_name')
                                            ->maxLength(255),

                                        TextInput::make('meter_name')
                                            ->maxLength(255),

                                        TextInput::make('fmv_reference_number')
                                            ->label('FMV reference number')
                                            ->maxLength(255),

                                        TextInput::make('site_reference')
                                            ->maxLength(255),

                                        TextInput::make('telemetry_reference')
                                            ->maxLength(255),

                                        TagsInput::make('field_team')
                                            ->suggestions($userNames),

                                        TextInput::make('site_manager_name')
                                            ->maxLength(255),

                                        TextInput::make('site_manager_email')
                                            ->email()
                                            ->maxLength(255),

                                        TextInput::make('site_manager_number')
                                            ->maxLength(255),

                                        TextInput::make('site_contact_name')
                                            ->maxLength(255),

                                        TextInput::make('site_contact_email')
                                            ->email()
                                            ->maxLength(255),

                                        TextInput::make('site_contact_number')
                                            ->maxLength(255),

                                    ]),

                                Toggle::make('confined_spaces')
                                    ->onIcon('heroicon-m-check')
                                    ->offIcon('heroicon-o-x-mark')
                                    ->onColor('success')
                                ,

                                Geocomplete::make('site_address')
                                    ->prefix('Choose:')
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                        // This method is called every time the map marker is moved
                                        Log::info('afterStateUpdated from Geocomplete: ' . json_encode($state));
                                    })

                                    ->placeholder('Start typing an address ...')
                                    ->geolocate() // add a suffix button which requests and reverse geocodes the device location
                                    ->geolocateIcon('heroicon-o-map')// override the default icon for the geolocate button
                                    ->updateLatLng(),

                                Grid::make(3)
                                    ->schema([
                                        TextInput::make('w3w')
                                            ->label('W3W')
                                            ->maxLength(255),
                                            
                                            TextInput::make('lat')
                                            ->live()
                                            ->numeric()
                                            ->inputMode('decimal')
                                            ->reactive()
                                            ->label('GPRS lat')
                                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                                Log::info('Lat State: ' . json_encode($state)); // Log the state to see its structure
                                                MeterVerificationTestResource::setLat($state ?? ''); // Update lat property
                                                Log::info('Updated lat: ' . MeterVerificationTestResource::getLat()); // Log updated lat
                                                MeterVerificationTestResource::getWhatThreeWords();
                                            }),

                                            TextInput::make('lng')
                                            ->live()
                                            ->numeric()
                                            ->inputMode('decimal')
                                            ->reactive()
                                            ->label('GPRS lng')
                                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                                Log::info('Lng State: ' . json_encode($state)); // Log the state to see its structure
                                                MeterVerificationTestResource::setLng($state ?? ''); // Update lng property
                                                Log::info('Updated lng: ' . MeterVerificationTestResource::getLng()); // Log updated lng
                                                MeterVerificationTestResource::getWhatThreeWords();
                                            }),

                                            
                                    ]),

                                TextInput::make('any_name'),

                                Map::make('location')
                                    ->geoJson(function () {
                                        return '{}';
                                    })
                                    ->geoJsonContainsField('any_name')
                                    ->mapControls([
                                        'mapTypeControl' => true,
                                        'scaleControl' => true,
                                        'streetViewControl' => true,
                                        'rotateControl' => true,
                                        'fullscreenControl' => true,
                                        'searchBoxControl' => false, // creates geocomplete field inside map
                                        'zoomControl' => true,
                                    ])
                                    ->geolocate()
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                        // This method is called every time the map marker is moved
                                        Log::info('afterStateUpdated from map: ' . json_encode($state));
                                        $set('lng', $state['lng']);
                                        $set('lat', $state['lat']);
                                    })

                                    ->height(fn() => '400px') // map height (width is controlled by Filament options)
                                    ->defaultZoom(5) // default zoom level when opening form
                                    ->autocomplete('site_address') // field on form to use as Places geocompletion field
                                    ->autocompleteReverse(true) // reverse geocode marker location to autocomplete field
                                    ->reverseGeocode([
                                        'street' => '%n %S',
                                        'city' => '%L',
                                        'state' => '%A1',
                                        'zip' => '%z',
                                    ]) // reverse geocode marker location to form fields, see notes below

                                    ->draggable() // allow dragging to move marker
                                    ->clickable(false) // allow clicking to move marker
                                    ->geolocate() // adds a button to request device location and set map marker accordingly
                                    ->geolocateLabel('Get Location') // overrides the default label for geolocate button
                                    ->geolocateOnLoad(false, false), // geolocate on load, second arg 'always' (default false, only for new form))


                                Fieldset::make('Have all safety checks been completed?')
                                    ->schema([
                                        Toggle::make('rams_checked')
                                            ->label('RAMS checked')
                                            ->onIcon('heroicon-m-check')
                                            ->offIcon('heroicon-o-x-mark')
                                            ->onColor('success')
                                            ->offColor('danger')
                                        ,
                                        Toggle::make('chamber_safety_check_completed')
                                            ->onIcon('heroicon-m-check')
                                            ->offIcon('heroicon-o-x-mark')
                                            ->onColor('success')
                                            ->offColor('danger')
                                        ,
                                        Toggle::make('tripod_fall_arrest_safety_check_completed')
                                            ->onIcon('heroicon-m-check')
                                            ->offIcon('heroicon-o-x-mark')
                                            ->onColor('success')
                                            ->offColor('danger')
                                        ,
                                        Toggle::make('harness_safety_check_completed')
                                            ->onIcon('heroicon-m-check')
                                            ->offIcon('heroicon-o-x-mark')
                                            ->onColor('success')
                                            ->offColor('danger')
                                        ,
                                        Toggle::make('gas_monitor_checks_completed')
                                            ->onIcon('heroicon-m-check')
                                            ->offIcon('heroicon-o-x-mark')
                                            ->onColor('success')
                                            ->offColor('danger')
                                        ,
                                    ])->columns(3),

                                Grid::make(4)
                                    ->schema([
                                        TextInput::make('gas_oxygen_monitor_reading_1')

                                            ->maxLength(255),
                                        TextInput::make('h2s_reading_2')
                                            ->label('H2S reading 2')
                                            ->maxLength(255),

                                        TextInput::make('lel_reading_3')
                                            ->label('LEL reading 3')
                                            ->maxLength(255),

                                        TextInput::make('additional_reading_4')
                                            ->label('Additional reading 4')
                                            ->maxLength(255),
                                    ]),


                                Toggle::make('safe_to_enter_chamber')
                                    ->onIcon('heroicon-m-check')
                                    ->offIcon('heroicon-o-x-mark')
                                    ->onColor('success')
                                    ->offColor('danger')
                                ,
                                Textarea::make('comment_why_not_safe_to_enter')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                FileUpload::make('video_of_existing_meter_and_pipe')
                                    ->directory('/meter-verification-tests')
                                ,
                                FileUpload::make('video_of_mut_transmitter')
                                    ->label('Video of MUT transmitter')
                                    ->directory('/meter-verification-tests')
                                ,
                            ]),




                        Step::make('Recorded Volumetric Comparison')
                            ->schema([

                                Grid::make(2)
                                    ->schema([
                                        DatePicker::make('validation_start_date'),
                                        TimePicker::make('validation_start_time')->seconds(false),
                                    ]),
                                Fieldset::make('Client MUT')
                                    ->schema([
                                        // Client's MUT
                                        Grid::make(3)
                                            ->schema([
                                                Select::make('flow_conversion_value')
                                                    ->options([
                                                        'option_1' => 'Option 1',
                                                        'option_2' => 'Option 2',
                                                        'option_3' => 'Option 3'
                                                    ]),
                                                TextInput::make('client_mut_flow')
                                                    ->prefix('l/s')
                                                    ->label('Flow'),
                                                TextInput::make('client_mut_velocity')
                                                    ->prefix('m/s')
                                                    ->label('Velocity'),
                                            ]),
                                        Select::make('total_forward_conversion_value')
                                            ->label('Total forward > conversion value')
                                            ->options([
                                                'option_1' => 'Option 1',
                                                'option_2' => 'Option 2',
                                                'option_3' => 'Option 3'
                                            ]),
                                        TextInput::make('client_mut_total_forward')
                                            ->prefix('m3')
                                            ->label('Total forward >'),
                                        Select::make('total_return_conversion_value')
                                            ->label('Total return < conversion value')
                                            ->options([
                                                'option_1' => 'Option 1',
                                                'option_2' => 'Option 2',
                                                'option_3' => 'Option 3'
                                            ]),
                                        TextInput::make('client_mut_total_return')
                                            ->prefix('m3')
                                            ->label('Total return <'),
                                    ])->columns(4),


                                Fieldset::make('FMV MM1')
                                    ->schema([
                                        // FMV MM1
                                        TextInput::make('fmv_mm1_flow')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm1_velocity')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm1_total')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV MM2')
                                    ->schema([
                                        // FMV MM2
                                        TextInput::make('fmv_mm2_flow')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm2_velocity')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm2_total')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV MM3')
                                    ->schema([
                                        //FMV MM3
                                        TextInput::make('fmv_mm3_flow')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm3_velocity')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm3_total')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV MM4')
                                    ->schema([
                                        //FMV MM4
                                        TextInput::make('fmv_mm4_flow')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm4_velocity')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm4_total')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV AVE')
                                    ->schema([
                                        //FMV MM AVE
                                        TextInput::make('fmv_mm_ave_flow')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm_ave_velocity')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm_ave_total')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),



                                FileUpload::make('start_test_photo')
                                    ->directory('/meter-verification-tests'),

                                Grid::make(2)
                                    ->schema([
                                        DatePicker::make('validation_end_date'),
                                        TimePicker::make('validation_end_time')->seconds(false),
                                    ]),


                                Fieldset::make('Client MUT')
                                    ->schema([
                                        // Client MUT
                                        TextInput::make('client_mut_flow_2')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('client_mut_velocity_2')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('client_mut_total_2')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV MM1')
                                    ->schema([
                                        //FMV MM1
                                        TextInput::make('fmv_mm1_flow_2')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm1_velocity_2')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm1_total_2')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV MM2')
                                    ->schema([
                                        // FMV MM2
                                        TextInput::make('fmv_mm2_flow_2')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm2_velocity_2')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm2_total_2')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV MM3')
                                    ->schema([
                                        //FMV MM3
                                        TextInput::make('fmv_mm3_flow_2')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm3_velocity_2')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm3_total_2')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV MM4')
                                    ->schema([
                                        //FMV MM4
                                        TextInput::make('fmv_mm4_flow_2')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm4_velocity_2')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm4_total_2')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),


                                Fieldset::make('FMV MM AVE')
                                    ->schema([
                                        //FMV MM AVE
                                        TextInput::make('fmv_mm_ave_flow_2')
                                            ->prefix('l/s')
                                            ->label('Flow'),
                                        TextInput::make('fmv_mm_ave_velocity_2')
                                            ->prefix('m/s')
                                            ->label('Velocity'),
                                        TextInput::make('fmv_mm_ave_total_2')
                                            ->prefix('m3')
                                            ->label('Total'),
                                    ])->columns(3),



                                Textarea::make('additional_comments'),


                                FileUpload::make('end_test_photo_1')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('end_test_photo_2')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('end_test_photo_3')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('end_test_photo_4')
                                    ->directory('/meter-verification-tests'),
                            ]),
                        Step::make('FMV-Client Volume Totals')
                            ->schema([

                                Fieldset::make('Client MUT Totals Forward > and Return <')
                                    ->schema([
                                        TextInput::make('client_mut_total_forward_conversion_selected')
                                            ->label('Total Forward > conversion selected'),
                                        TextInput::make('client_mut_total_forward_volume')
                                            ->prefix('m3')
                                            ->label('Client MUT Total Forward > volume'),
                                        TextInput::make('client_mut_total_return_conversion_selected')
                                            ->label('Total Return < conversion selected'),
                                        TextInput::make('client_mut_total_return_volume')
                                            ->prefix('m3')
                                            ->label('Client MUT Total Return < volume'),
                                    ])->columns(2),


                                Fieldset::make()
                                    ->schema([
                                        TextInput::make('fmv_mm1_total_volume')
                                            ->prefix('m3')
                                            ->label('FMV MM1 Total Volume'),
                                        TextInput::make('fmv_mm2_total_volume')
                                            ->prefix('m3')
                                            ->label('FMV MM2 Total Volume'),
                                        TextInput::make('fmv_mm3_total_volume')
                                            ->prefix('m3')
                                            ->label('FMV MM3 Total Volume'),
                                        TextInput::make('fmv_mm4_total_volume')
                                            ->prefix('m3')
                                            ->label('FMV MM4 Total Volume'),
                                    ])->columns(4),


                                TextInput::make('fmv_mm_average_total_volume')
                                    ->prefix('m3')
                                    ->label('FMV MM Average Total Volume'),
                                TextInput::make('mut_minus_mm_average')
                                    ->prefix('m3')
                                    ->label('MUT Minus MM Average'),
                                TextInput::make('mut_minus_mm_average_percent')
                                    ->prefix('m3')
                                    ->label('MUT Minus MM Average Percent'),
                            ]),




                    ])

                ])
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();

        // Check if the user is not a super_admin
        if (!$user->hasRole('super_admin')) {
            // If the user is not a super_admin, apply the query restriction
            return static::getModel()::query()->where('user_id', $user->id);
        }

        // If the user is a super_admin, return the query without any restriction
        return static::getModel()::query();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('user.image_url')
                    ->label('Avatar')
                    ->size(40)
                    ->circular(),
                TextColumn::make('user.name')
                    ->limit('50')
                    ->label('User Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('site_name')
                    ->searchable(),
                TextColumn::make('meter_name')
                    ->searchable(),
                TextColumn::make('updated_at')
                    ->date('H:m, j M')
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListMeterVerificationTests::route('/'),
            'create' => Pages\CreateMeterVerificationTest::route('/create'),
            'edit' => Pages\EditMeterVerificationTest::route('/{record}/edit'),
        ];
    }
}
