<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use App\Models\LocalSEO;
use App\Models\Post;
use Closure;
use Filament\Facades\Filament;
use Filament\Forms\Components\Card;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use NumberFormatter;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;


    protected static ?string $navigationGroup = 'Website';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')
                    ->live(onBlur: true)

                        ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                            $set('slug', Str::slug($state));
                            // Check if a post with the same title exists in the database
                            $existingPost = Category::where('name', $state)->first();
                            if ($existingPost) {
                                Notification::make()
                                ->title('A post with this title already exists in the database')
                                ->danger()
                                ->send();
                                $set('slug', '');
                                $set('name', '');
                            }
                        })
                        ->required(),
                    TextInput::make('slug')
                        ->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->limit('50')->sortable()->searchable(),
                TextColumn::make('slug')->limit('50'),

            ])
            ->filters([
                //
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
