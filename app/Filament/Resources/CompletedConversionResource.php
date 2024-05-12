<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompletedConversionResource\Pages;
use App\Filament\Resources\CompletedConversionResource\RelationManagers;
use App\Models\CompletedConversion;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompletedConversionResource extends Resource
{
    protected static ?string $model = CompletedConversion::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $navigationLabel = 'Completed Conversions';

    protected static ?string $navigationGroup = 'Converter';

    protected static ?int $navigationSort = 1;


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_id')->limit('50')->sortable()->searchable(),
                TextColumn::make('conversion_description')->limit('50')->searchable(),
                TextColumn::make('updated_at')->limit('50'),
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
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
