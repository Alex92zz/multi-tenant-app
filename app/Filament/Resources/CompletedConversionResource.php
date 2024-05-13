<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompletedConversionResource\Pages;
use App\Filament\Resources\CompletedConversionResource\RelationManagers;
use App\Models\CompletedConversion;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;
use Illuminate\Support\Facades\Log;

class CompletedConversionResource extends Resource
{
    protected static ?string $model = CompletedConversion::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $navigationLabel = 'Completed Conversions';

    protected static ?string $navigationGroup = 'Converter';

    protected static ?int $navigationSort = 1;



    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user()->id;
        return static::getModel()::query()->where('user_id', $user);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('user.name')->limit('50')
                    ->label('User Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('conversion_description')->limit('50')->searchable(),
                TextColumn::make('updated_at')
                    ->limit('50')
                    ->sortable()
                    ->date('H:m, j-M-Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
                Action::make('download')
                ->label('Download')
                ->color('success')
                ->icon('heroicon-o-arrow-down-circle')
                ->url(function ($record) {
                    return route('download', ['filename' => $record->url]); // Assuming $record has a 'filename' attribute
                }),
                Tables\Actions\DeleteAction::make(),
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([

                ]),
            ])
            ->emptyStateActions([

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
            'index' => Pages\ListCompletedConversions::route('/'),
        ];
    }
}
