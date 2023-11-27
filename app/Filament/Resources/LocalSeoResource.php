<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LocalSeoResource\Pages;
use App\Models\LocalSEO;
use Closure;
use Filament\Facades\Filament;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class LocalSeoResource extends Resource
{
    protected static ?string $model = LocalSEO::class;

    protected static ?string $navigationLabel  = 'LocalSEO Pages';

    protected static ?string $navigationIcon = 'heroicon-o-document-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    
                    TextInput::make('title')
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->live(onBlur: true)
                        ->required(),
                    Select::make('category_id')
                        ->relationship('Category', 'name')
                        ->reactive()
                        ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                            $category = \App\Models\Category::find($state);
                            if ($category) {
                                $set('category', $category->name);
                                $set('category_slug', Str::slug($category->name));
                            }
                        })
                        ->required(),
                    Hidden::make('category'),
                    Hidden::make('category_slug')
                        ->required(),
                    TextInput::make('page_description')->required()
                    ->label('Meta Description'),
                    TextInput::make('slug')
                        ->required(),
                    
                    TextInput::make('location')->required(),
                    
                    Hidden::make('header_text')
                        ->default('John'),
                    TextInput::make('about_us_green_subtitle')
                    ->label('Text above the first image, aprox 18 words')
                    ->required(),
                    RichEditor::make('about_us_paragraph')
                    ->label('Main Paragraph, 6 subtitles, aprox 360 words')
                    ->required()
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                    ]),

                    
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->limit('50')->sortable()->searchable(),
                TextColumn::make('slug')->limit('50'),
                TextColumn::make('category')->limit('50')->sortable()->searchable(),
                TextColumn::make('updated_at')
                    ->limit('50')
                    ->sortable()
                    ->date('d/m/Y  H:i'), // Modify the format as desired
            ])
            ->filters([
                SelectFilter::make('Category')->relationship('category', 'name'),
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
            'index' => Pages\ListLocalSeos::route('/'),
            'create' => Pages\CreateLocalSeo::route('/create'),
            'edit' => Pages\EditLocalSeo::route('/{record}/edit'),
        ];
    }
}
