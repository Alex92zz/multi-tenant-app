<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeterVerificationTestResource\Pages;
use App\Models\MeterVerificationTest;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class MeterVerificationTestResource extends Resource
{
    protected static ?string $model = MeterVerificationTest::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Verification Forms';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('4-Meter Verification Test')
                            ->schema([
                                TextInput::make('user_id')
                                    ->label('User Logged In')
                                    ->required(),
                                TextInput::make('site_name')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('meter_name')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('fmv_reference_number')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('site_reference')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('telemetry_reference')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('field_team')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('site_manager_name')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('site_manager_email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('site_manager_number')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('site_contact_name')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('site_contact_email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('site_contact_number')
                                    ->required()
                                    ->maxLength(255),
                                Toggle::make('confined_spaces')
                                    ->required(),
                                Textarea::make('site_address')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                TextInput::make('w3w')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('gprs')
                                    ->required()
                                    ->maxLength(255),
                                Toggle::make('rams_checked')
                                    ->required(),
                                Toggle::make('chamber_safety_check_completed')
                                    ->required(),
                                Toggle::make('tripod_fall_arrest_safety_check_completed')
                                    ->required(),
                                Toggle::make('harness_safety_check_completed')
                                    ->required(),
                                Toggle::make('gas_monitor_checks_completed')
                                    ->required(),
                                TextInput::make('gas_oxygen_monitor_reading_1')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('h2s_reading_2')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('lel_reading_3')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('additional_reading_4')
                                    ->required()
                                    ->maxLength(255),
                                Toggle::make('safe_to_enter_chamber')
                                    ->required(),
                                Textarea::make('comment_why_not_safe_to_enter')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                FileUpload::make('video_of_existing_meter_and_pipe')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                FileUpload::make('video_of_mut_transmitter')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                            ]),
                        Tab::make('Recorded Volumetric Comparison T1')
                            ->schema([
                                DatePicker::make('t1_validation_start_date')->required(),
                                TimePicker::make('t1_validation_start_time')->seconds(false)->required(),
                                TextInput::make('t1_client_mut_flow')->required(),
                                TextInput::make('t1_client_mut_velocity')->required(),
                                TextInput::make('t1_client_mut_total')->required(),
                                TextInput::make('t1_fmv_mm1_flow')->required(),
                                TextInput::make('t1_fmv_mm1_velocity')->required(),
                                TextInput::make('t1_fmv_mm2_flow')->required(),
                                TextInput::make('t1_fmv_mm2_velocity')->required(),
                                TextInput::make('t1_fmv_mm2_total')->required(),
                                TextInput::make('t1_fmv_mm3_flow')->required(),
                                TextInput::make('t1_fmv_mm3_velocity')->required(),
                                TextInput::make('t1_fmv_mm3_total')->required(),
                                TextInput::make('t1_fmv_mm4_flow')->required(),
                                TextInput::make('t1_fmv_mm4_velocity')->required(),
                                TextInput::make('t1_fmv_mm4_total')->required(),
                                TextInput::make('t1_fmv_mm_ave_flow')->required(),
                                TextInput::make('t1_fmv_mm_ave_velocity')->required(),
                                TextInput::make('t1_fmv_mm_ave_total')->required(),
                                FileUpload::make('t1_start_test_photo')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                DatePicker::make('t1_validation_end_date')->required(),
                                TimePicker::make('t1_validation_end_time')->seconds(false)->required(),
                                TextInput::make('t1_client_mut_flow_2')->required(),
                                TextInput::make('t1_client_mut_velocity_2')->required(),
                                TextInput::make('t1_client_mut_total_2')->required(),
                                TextInput::make('t1_fmv_mm1_flow_2')->required(),
                                TextInput::make('t1_fmv_mm1_velocity_2')->required(),
                                TextInput::make('t1_fmv_mm1_total_2')->required(),
                                TextInput::make('t1_fmv_mm2_flow_2')->required(),
                                TextInput::make('t1_fmv_mm2_velocity_2')->required(),
                                TextInput::make('t1_fmv_mm2_total_2')->required(),
                                TextInput::make('t1_fmv_mm3_flow_2')->required(),
                                TextInput::make('t1_fmv_mm3_velocity_2')->required(),
                                TextInput::make('t1_fmv_mm3_total_2')->required(),
                                TextInput::make('t1_fmv_mm4_flow_2')->required(),
                                TextInput::make('t1_fmv_mm4_velocity_2')->required(),
                                TextInput::make('t1_fmv_mm4_total_2')->required(),
                                TextInput::make('t1_fmv_mm_ave_flow_2')->required(),
                                TextInput::make('t1_fmv_mm_ave_velocity_2')->required(),
                                TextInput::make('t1_fmv_mm_ave_total_2')->required(),
                                Textarea::make('t1_additional_comments')->required(),
                                FileUpload::make('t1_end_test_photo_1')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                FileUpload::make('t1_end_test_photo_2')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                FileUpload::make('t1_end_test_photo_3')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                FileUpload::make('t1_end_test_photo_4')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                            ]),
                        Tab::make('FMV-Client Volume Totals T1')
                            ->schema([
                                TextInput::make('t1_mut_total_volume')->required(),
                                TextInput::make('t1_fmv_mm1_total_volume')->required(),
                                TextInput::make('t1_fmv_mm2_total_volume')->required(),
                                TextInput::make('t1_fmv_mm3_total_volume')->required(),
                                TextInput::make('t1_fmv_mm4_total_volume')->required(),
                                TextInput::make('t1_fmv_mm_average_total_volume')->required(),
                                TextInput::make('t1_mut_minus_mm_average')->required(),
                                TextInput::make('t1_mut_minus_mm_average_percent')->required(),
                            ]),
                        Tab::make('Recorded Volumetric Comparison T2')
                            ->schema([
                                DatePicker::make('t2_validation_start_date')->required(),
                                TimePicker::make('t2_validation_start_time')->seconds(false)->required(),
                                TextInput::make('t2_client_mut_flow')->required(),
                                TextInput::make('t2_client_mut_velocity')->required(),
                                TextInput::make('t2_client_mut_total')->required(),
                                TextInput::make('t2_fmv_mm1_flow')->required(),
                                TextInput::make('t2_fmv_mm1_velocity')->required(),
                                TextInput::make('t2_fmv_mm2_flow')->required(),
                                TextInput::make('t2_fmv_mm2_velocity')->required(),
                                TextInput::make('t2_fmv_mm2_total')->required(),
                                TextInput::make('t2_fmv_mm3_flow')->required(),
                                TextInput::make('t2_fmv_mm3_velocity')->required(),
                                TextInput::make('t2_fmv_mm3_total')->required(),
                                TextInput::make('t2_fmv_mm4_flow')->required(),
                                TextInput::make('t2_fmv_mm4_velocity')->required(),
                                TextInput::make('t2_fmv_mm4_total')->required(),
                                TextInput::make('t2_fmv_mm_ave_flow')->required(),
                                TextInput::make('t2_fmv_mm_ave_velocity')->required(),
                                TextInput::make('t2_fmv_mm_ave_total')->required(),
                                FileUpload::make('t2_start_test_photo')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                DatePicker::make('t2_validation_end_date')->required(),
                                TimePicker::make('t2_validation_end_time')->seconds(false)->required(),
                                TextInput::make('t2_client_mut_flow_2')->required(),
                                TextInput::make('t2_client_mut_velocity_2')->required(),
                                TextInput::make('t2_client_mut_total_2')->required(),
                                TextInput::make('t2_fmv_mm1_flow_2')->required(),
                                TextInput::make('t2_fmv_mm1_velocity_2')->required(),
                                TextInput::make('t2_fmv_mm1_total_2')->required(),
                                TextInput::make('t2_fmv_mm2_flow_2')->required(),
                                TextInput::make('t2_fmv_mm2_velocity_2')->required(),
                                TextInput::make('t2_fmv_mm2_total_2')->required(),
                                TextInput::make('t2_fmv_mm3_flow_2')->required(),
                                TextInput::make('t2_fmv_mm3_velocity_2')->required(),
                                TextInput::make('t2_fmv_mm3_total_2')->required(),
                                TextInput::make('t2_fmv_mm4_flow_2')->required(),
                                TextInput::make('t2_fmv_mm4_velocity_2')->required(),
                                TextInput::make('t2_fmv_mm4_total_2')->required(),
                                TextInput::make('t2_fmv_mm_ave_flow_2')->required(),
                                TextInput::make('t2_fmv_mm_ave_velocity_2')->required(),
                                TextInput::make('t2_fmv_mm_ave_total_2')->required(),
                                Textarea::make('t2_additional_comments')->required(),
                                FileUpload::make('t2_end_test_photo_1')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                    FileUpload::make('t2_end_test_photo_2')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                    FileUpload::make('t2_end_test_photo_3')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                                    FileUpload::make('t2_end_test_photo_4')
                                    ->directory('/meter-verification-tests')
                                    ->required(),
                            ]),
                        Tab::make('FMV - Client Volume Totals T2')
                            ->schema([
                                TextInput::make('t2_mut_total_volume')->required(),
                                TextInput::make('t2_fmv_mm1_total_volume')->required(),
                                TextInput::make('t2_fmv_mm2_total_volume')->required(),
                                TextInput::make('t2_fmv_mm3_total_volume')->required(),
                                TextInput::make('t2_fmv_mm4_total_volume')->required(),
                                TextInput::make('t2_fmv_mm_average_total_volume')->required(),
                                TextInput::make('t2_mut_minus_mm_average')->required(),
                                TextInput::make('t2_mut_minus_mm_average_percent')->required(),
                            ]),
                    ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('site_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meter_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fmv_reference_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telemetry_reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('field_team')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_manager_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_manager_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_manager_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_contact_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_contact_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('site_contact_number')
                    ->searchable(),
                Tables\Columns\IconColumn::make('confined_spaces')
                    ->boolean(),
                Tables\Columns\TextColumn::make('w3w')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gprs')
                    ->searchable(),
                Tables\Columns\IconColumn::make('rams_checked')
                    ->boolean(),
                Tables\Columns\IconColumn::make('chamber_safety_check_completed')
                    ->boolean(),
                Tables\Columns\IconColumn::make('tripod_fall_arrest_safety_check_completed')
                    ->boolean(),
                Tables\Columns\IconColumn::make('harness_safety_check_completed')
                    ->boolean(),
                Tables\Columns\IconColumn::make('gas_monitor_checks_completed')
                    ->boolean(),
                Tables\Columns\TextColumn::make('gas_oxygen_monitor_reading_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('h2s_reading_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lel_reading_3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('additional_reading_4')
                    ->searchable(),
                Tables\Columns\IconColumn::make('safe_to_enter_chamber')
                    ->boolean(),
                Tables\Columns\TextColumn::make('video_of_existing_meter_and_pipe')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video_of_mut_transmitter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
