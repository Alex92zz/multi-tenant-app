<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeLeaveRequestResource\Pages;
use App\Models\EmployeeLeaveRequest;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class EmployeeLeaveRequestResource extends Resource
{
    protected static ?string $model = EmployeeLeaveRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationGroup = 'Employees';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('full_name')
                        ->label('Full Name')
                        ->required(),
                    TextInput::make('email')
                        ->email()
                        ->required(),
                    TextInput::make('contact_number')
                        ->tel()
                        ->required(),
                    Select::make('leave_type')
                        ->options([
                            'Medical' => 'Medical',
                            'Vacation' => 'Vacation',
                            'General' => 'General',
                            'Maternity' => 'Maternity',
                            'Compassionate' => 'Compassionate',
                        ])
                        ->required(),
                    DatePicker::make('from_date')
                        ->required()
                        ->minDate(today()),
                    DatePicker::make('to_date')
                        ->required()
                        ->rules(['after_or_equal:from_date'])
                        ->minDate('from_date'),
                    TextInput::make('total_days')
                        ->label('Total days')
                        ->required(),
                    Textarea::make('comments'),
                    SignaturePad::make('signature')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        //$user = auth()->user();

        return $table
            //->query(fn(Builder $query) => $query->where('id', $user->id))
            ->columns([
                TextColumn::make('full_name')->limit('50')->sortable()->searchable(),
                TextColumn::make('leave_type')->sortable()->limit('50'),
                TextColumn::make('from_date')->sortable()->date('j M Y'),
                TextColumn::make('to_date')->sortable()->date('j M Y'),
                TextColumn::make('total_days'),
                TextColumn::make('updated_at')
                    ->limit('50')
                    ->sortable()
                    ->date('M j, Y'),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEmployeeLeaveRequests::route('/'),
            'create' => Pages\CreateEmployeeLeaveRequest::route('/create'),
            'edit' => Pages\EditEmployeeLeaveRequest::route('/{record}/edit'),
        ];
    }
}
