<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeterReplacementSurveyResource\Pages;
use App\Filament\Resources\MeterReplacementSurveyResource\RelationManagers;
use App\Models\MeterReplacementSurvey;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Wizard\Step;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class MeterReplacementSurveyResource extends Resource
{
    protected static ?string $model = MeterReplacementSurvey::class;

    protected static ?string $navigationIcon = 'heroicon-s-wallet';

    protected static ?string $navigationGroup = 'Verification Forms';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Wizard::make([
                        Step::make('New Meter Installation Report')
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

                                        TextInput::make('field_team')
                                            ->maxLength(255),

                                        TextInput::make('site_contact_number')
                                            ->maxLength(255),

                                    ]),

                                Toggle::make('confined_spaces')
                                    ->onIcon('heroicon-m-check')
                                    ->offIcon('heroicon-o-x-mark')
                                    ->onColor('success'),

                                Textarea::make('site_address')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('w3w')
                                            ->label('W3W')
                                            ->maxLength(255),

                                        TextInput::make('gprs')
                                            ->label('GPRS')
                                            ->maxLength(255),
                                    ]),

                                    Fieldset::make()
                                    ->schema([
                                        TextInput::make('chamber_length'),
                                        TextInput::make('chamber_width'),
                                        TextInput::make('chamber_depth'),

                                    ])->columns(3),

                                    Toggle::make('2_person_lift_cover'),

                                    FileUpload::make('image_url')
                                    ->label('Image Upload')
                                    ->directory('/meter-verification-tests'),

                                    FileUpload::make('video_of_new_meter_and_pipework')
                                    ->directory('/meter-verification-tests'),

                                    FileUpload::make('video_of_new_transmitter')
                                    ->directory('/meter-verification-tests'),

                                    FileUpload::make('site_sketch')
                                    ->directory('/meter-verification-tests'),
                            ]),

                        Step::make('New Meter Details')
                            ->schema([

                            ]),

                        Step::make('Verification Check List')
                            ->schema([

                            ]),

                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListMeterReplacementSurveys::route('/'),
            'create' => Pages\CreateMeterReplacementSurvey::route('/create'),
            'edit' => Pages\EditMeterReplacementSurvey::route('/{record}/edit'),
        ];
    }
}
