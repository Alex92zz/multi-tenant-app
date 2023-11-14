<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SitemapResource\Pages;
use App\Filament\Resources\SitemapResource\RelationManagers;
use App\Models\Sitemap;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SitemapResource extends Resource
{
    protected static ?string $model = Sitemap::class;

    protected static ?string $navigationLabel  = 'Sitemap';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-link';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('url')->required(),
                    TextInput::make('priority')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('url'),
                TextColumn::make('priority'),
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
            'index' => Pages\ListSitemaps::route('/'),
            'create' => Pages\CreateSitemap::route('/create'),
            'edit' => Pages\EditSitemap::route('/{record}/edit'),
        ];
    }    
}
