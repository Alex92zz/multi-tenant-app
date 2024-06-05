<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeterAbortReportResource\Pages;
use App\Filament\Resources\MeterAbortReportResource\RelationManagers;
use App\Models\MeterAbortReport;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class MeterAbortReportResource extends Resource
{
    protected static ?string $model = MeterAbortReport::class;

    protected static ?string $navigationGroup = 'Verification Forms';

    protected static ?string $navigationLabel = 'Verification Abort Report';
    protected static ?string $navigationIcon = 'heroicon-o-archive-box-x-mark';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Wizard::make([
                        Step::make('FMV Meter Verification Report')
                            ->schema([
                                //tab 1
                                Hidden::make('user_id')
                                    ->label('User Logged In')
                                    ->default(Auth::id()),


                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('site_name'),
                                        TextInput::make('site_address'),
                                        TextInput::make('meter_name'),
                                        TextInput::make('reference_number'),
                                        TextInput::make('field_team'),
                                        TextInput::make('site_manager'),
                                        TextInput::make('site_manager_email'),
                                        TextInput::make('site_contact_name'),
                                        TextInput::make('site_contact_number'),
                                        TextInput::make('site_contact_email'),
                                    ]),
                                Radio::make('client_site_or_network')
                                    ->inline()
                                    ->options([
                                        1 => 'Client Site',
                                        2 => 'Network',
                                    ]),

                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('w3w')
                                            ->label('W3W'),
                                        TextInput::make('gps')
                                            ->label('GPS'),
                                    ]),
                                TextInput::make('grid_ref'),

                                Fieldset::make()
                                    ->schema([
                                        Toggle::make('tma')
                                            ->label('TMA'),
                                            Toggle::make('confined_spaces'),
                                            Toggle::make('2_person_lift_cover'),
                                    ])->columns(3),


                                FileUpload::make('image_url')
                                    ->label('Add Image')
                                    ->directory('/images/meter-abort-report'),
                                Textarea::make('abort_reason'),
                            ]),

                        Step::make('Verification Check List')
                            ->schema([
                                //tab 2
                                Textarea::make('comment'),
                                FileUpload::make('site_photo')
                                    ->directory('/images/meter-abort-report'),
                                FileUpload::make('mut_photo')
                                    ->label('MUT Photo')
                                    ->directory('/images/meter-abort-report'),
                                FileUpload::make('transmitter_photo')
                                    ->label('site_photo')
                                    ->directory('/images/meter-abort-report'),
                                FileUpload::make('mm1_mm2_photo')
                                    ->label('MM1 and MM2 Photo')
                                    ->directory('/images/meter-abort-report'),
                                FileUpload::make('chamber_photo')
                                    ->directory('/images/meter-abort-report'),
                                FileUpload::make('additional_photo')
                                    ->directory('/images/meter-abort-report'),
                                SignaturePad::make('signature'),
                            ]),
                    ])
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
            'index' => Pages\ListMeterAbortReports::route('/'),
            'create' => Pages\CreateMeterAbortReport::route('/create'),
            'edit' => Pages\EditMeterAbortReport::route('/{record}/edit'),
        ];
    }
}
