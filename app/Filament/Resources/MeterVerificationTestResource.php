<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeterVerificationTestResource\Pages;
use App\Models\MeterVerificationTest;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('4-Meter Verification Test')
                            ->schema([
                                Hidden::make('user_id')
                                    ->label('User Logged In')
                                    ->default(Auth::id()),

                                TextInput::make('site_name')
                                    ->maxLength(255),
                                TextInput::make('meter_name')
                                    
                                    ->maxLength(255),
                                TextInput::make('fmv_reference_number')
                                    
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
                                Toggle::make('confined_spaces')
                                    ,
                                Textarea::make('site_address')
                                    
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                TextInput::make('w3w')
                                    
                                    ->maxLength(255),
                                TextInput::make('gprs')
                                    
                                    ->maxLength(255),
                                Toggle::make('rams_checked')
                                    ,
                                Toggle::make('chamber_safety_check_completed')
                                    ,
                                Toggle::make('tripod_fall_arrest_safety_check_completed')
                                    ,
                                Toggle::make('harness_safety_check_completed')
                                    ,
                                Toggle::make('gas_monitor_checks_completed')
                                    ,
                                TextInput::make('gas_oxygen_monitor_reading_1')
                                    
                                    ->maxLength(255),
                                TextInput::make('h2s_reading_2')
                                    
                                    ->maxLength(255),
                                TextInput::make('lel_reading_3')
                                    
                                    ->maxLength(255),
                                TextInput::make('additional_reading_4')
                                    
                                    ->maxLength(255),
                                Toggle::make('safe_to_enter_chamber')
                                    ,
                                Textarea::make('comment_why_not_safe_to_enter')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                FileUpload::make('video_of_existing_meter_and_pipe')
                                    ->directory('/meter-verification-tests')
                                    ,
                                FileUpload::make('video_of_mut_transmitter')
                                    ->directory('/meter-verification-tests')
                                    ,
                            ]),
                        Tab::make('Recorded Volumetric Comparison T1')
                            ->schema([
                                DatePicker::make('t1_validation_start_date'),
                                TimePicker::make('t1_validation_start_time'),
                                // Client's MUT
                                TextInput::make('t1_client_mut_flow'),
                                TextInput::make('t1_client_mut_velocity'),
                                TextInput::make('t1_client_mut_total'),
                                // FMV MM1
                                TextInput::make('t1_fmv_mm1_flow'),
                                TextInput::make('t1_fmv_mm1_velocity'),
                                TextInput::make('t1_fmv_mm1_total'),
                                // FMV MM2
                                TextInput::make('t1_fmv_mm2_flow'),
                                TextInput::make('t1_fmv_mm2_velocity'),
                                TextInput::make('t1_fmv_mm2_total'),
                                //FMV MM3
                                TextInput::make('t1_fmv_mm3_flow'),
                                TextInput::make('t1_fmv_mm3_velocity'),
                                TextInput::make('t1_fmv_mm3_total'),
                                //FMV MM4
                                TextInput::make('t1_fmv_mm4_flow'),
                                TextInput::make('t1_fmv_mm4_velocity'),
                                TextInput::make('t1_fmv_mm4_total'),
                                //FMV MM AVE
                                TextInput::make('t1_fmv_mm_ave_flow'),
                                TextInput::make('t1_fmv_mm_ave_velocity'),
                                TextInput::make('t1_fmv_mm_ave_total'),

                                FileUpload::make('t1_start_test_photo')
                                    ->directory('/meter-verification-tests'),
                                DatePicker::make('t1_validation_end_date'),
                                TimePicker::make('t1_validation_end_time'),
                                // Client MUT
                                TextInput::make('t1_client_mut_flow_2'),
                                TextInput::make('t1_client_mut_velocity_2'),
                                TextInput::make('t1_client_mut_total_2'),
                                //FMV MM1
                                TextInput::make('t1_fmv_mm1_flow_2'),
                                TextInput::make('t1_fmv_mm1_velocity_2'),
                                TextInput::make('t1_fmv_mm1_total_2'),
                                // FMV MM2
                                TextInput::make('t1_fmv_mm2_flow_2'),
                                TextInput::make('t1_fmv_mm2_velocity_2'),
                                TextInput::make('t1_fmv_mm2_total_2'),
                                //FMV MM3
                                TextInput::make('t1_fmv_mm3_flow_2'),
                                TextInput::make('t1_fmv_mm3_velocity_2'),
                                TextInput::make('t1_fmv_mm3_total_2'),
                                //FMV MM4
                                TextInput::make('t1_fmv_mm4_flow_2'),
                                TextInput::make('t1_fmv_mm4_velocity_2'),
                                TextInput::make('t1_fmv_mm4_total_2'),
                                //FMV MM AVE
                                TextInput::make('t1_fmv_mm_ave_flow_2'),
                                TextInput::make('t1_fmv_mm_ave_velocity_2'),
                                TextInput::make('t1_fmv_mm_ave_total_2'),
                                Textarea::make('t1_additional_comments'),
                                FileUpload::make('t1_end_test_photo_1')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('t1_end_test_photo_2')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('t1_end_test_photo_3')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('t1_end_test_photo_4')
                                    ->directory('/meter-verification-tests'),
                            ]),
                        Tab::make('FMV-Client Volume Totals T1')
                            ->schema([
                                TextInput::make('t1_mut_total_volume'),
                                TextInput::make('t1_fmv_mm1_total_volume'),
                                TextInput::make('t1_fmv_mm2_total_volume'),
                                TextInput::make('t1_fmv_mm3_total_volume'),
                                TextInput::make('t1_fmv_mm4_total_volume'),
                                TextInput::make('t1_fmv_mm_average_total_volume'),
                                TextInput::make('t1_mut_minus_mm_average'),
                                TextInput::make('t1_mut_minus_mm_average_percent'),
                            ]),
                        Tab::make('Recorded Volumetric Comparison T2')
                            ->schema([
                                DatePicker::make('t2_validation_start_date'),
                                TimePicker::make('t2_validation_start_time')->seconds(false),
                                TextInput::make('t2_client_mut_flow'),
                                TextInput::make('t2_client_mut_velocity'),
                                TextInput::make('t2_client_mut_total'),
                                TextInput::make('t2_fmv_mm1_flow'),
                                TextInput::make('t2_fmv_mm1_velocity'),
                                TextInput::make('t2_fmv_mm2_flow'),
                                TextInput::make('t2_fmv_mm2_velocity'),
                                TextInput::make('t2_fmv_mm2_total'),
                                TextInput::make('t2_fmv_mm3_flow'),
                                TextInput::make('t2_fmv_mm3_velocity'),
                                TextInput::make('t2_fmv_mm3_total'),
                                TextInput::make('t2_fmv_mm4_flow'),
                                TextInput::make('t2_fmv_mm4_velocity'),
                                TextInput::make('t2_fmv_mm4_total'),
                                TextInput::make('t2_fmv_mm_ave_flow'),
                                TextInput::make('t2_fmv_mm_ave_velocity'),
                                TextInput::make('t2_fmv_mm_ave_total'),
                                FileUpload::make('t2_start_test_photo')
                                    ->directory('/meter-verification-tests'),
                                DatePicker::make('t2_validation_end_date'),
                                TimePicker::make('t2_validation_end_time')->seconds(false),
                                TextInput::make('t2_client_mut_flow_2'),
                                TextInput::make('t2_client_mut_velocity_2'),
                                TextInput::make('t2_client_mut_total_2'),
                                TextInput::make('t2_fmv_mm1_flow_2'),
                                TextInput::make('t2_fmv_mm1_velocity_2'),
                                TextInput::make('t2_fmv_mm1_total_2'),
                                TextInput::make('t2_fmv_mm2_flow_2'),
                                TextInput::make('t2_fmv_mm2_velocity_2'),
                                TextInput::make('t2_fmv_mm2_total_2'),
                                TextInput::make('t2_fmv_mm3_flow_2'),
                                TextInput::make('t2_fmv_mm3_velocity_2'),
                                TextInput::make('t2_fmv_mm3_total_2'),
                                TextInput::make('t2_fmv_mm4_flow_2'),
                                TextInput::make('t2_fmv_mm4_velocity_2'),
                                TextInput::make('t2_fmv_mm4_total_2'),
                                TextInput::make('t2_fmv_mm_ave_flow_2'),
                                TextInput::make('t2_fmv_mm_ave_velocity_2'),
                                TextInput::make('t2_fmv_mm_ave_total_2'),
                                Textarea::make('t2_additional_comments'),
                                FileUpload::make('t2_end_test_photo_1')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('t2_end_test_photo_2')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('t2_end_test_photo_3')
                                    ->directory('/meter-verification-tests'),
                                FileUpload::make('t2_end_test_photo_4')
                                    ->directory('/meter-verification-tests'),
                            ]),
                        Tab::make('FMV - Client Volume Totals T2')
                            ->schema([
                                TextInput::make('t2_mut_total_volume'),
                                TextInput::make('t2_fmv_mm1_total_volume'),
                                TextInput::make('t2_fmv_mm2_total_volume'),
                                TextInput::make('t2_fmv_mm3_total_volume'),
                                TextInput::make('t2_fmv_mm4_total_volume'),
                                TextInput::make('t2_fmv_mm_average_total_volume'),
                                TextInput::make('t2_mut_minus_mm_average'),
                                TextInput::make('t2_mut_minus_mm_average_percent'),
                            ]),
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
