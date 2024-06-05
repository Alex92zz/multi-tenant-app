<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeterVerificationTestResource\Pages;
use App\Models\MeterVerificationTest;
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

class MeterVerificationTestResource extends Resource
{
    protected static ?string $model = MeterVerificationTest::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Verification Forms';

    public static function form(Form $form): Form
    {

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

                                        TextInput::make('field_team')
                                            ->maxLength(255),

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
                                TextInput::make('mut_total_volume')
                                    ->label('MUT Total Volume'),

                                Fieldset::make()
                                    ->schema([
                                        TextInput::make('fmv_mm1_total_volume')
                                            ->label('FMV MM1 Total Volume'),
                                        TextInput::make('fmv_mm2_total_volume')
                                            ->label('FMV MM2 Total Volume'),
                                        TextInput::make('fmv_mm3_total_volume')
                                            ->label('FMV MM3 Total Volume'),
                                        TextInput::make('fmv_mm4_total_volume')
                                            ->label('FMV MM4 Total Volume'),
                                    ])->columns(4),


                                TextInput::make('fmv_mm_average_total_volume')
                                    ->label('FMV MM Average Total Volume'),
                                TextInput::make('mut_minus_mm_average')
                                    ->label('MUT Minus MM Average'),
                                TextInput::make('mut_minus_mm_average_percent')
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
