<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Closure;
use Filament\Facades\Filament;
use Illuminate\Support\Str;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    

    protected static ?string $navigationGroup = 'Website';
    protected static ?string $navigationLabel  = 'Blog Posts';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected function beforeCreate(): void
    {
        // dd('before create');
        // Runs before the form fields are saved to the database.
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                    ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                        ->required(),
                    Select::make('category_id')
                        ->relationship('Category', 'name')->required(),
                    TextInput::make('description')->required(),
                    TextInput::make('slug')
                        ->required(),
                    FileUpload::make('thumbnail')
                    ->optimize('webp')
                        ->directory('/images/blog-posts')
                         ->required(),
                    RichEditor::make('content')->required()->disableToolbarButtons([
                            // 'attachFiles',
                            'codeBlock',
                        ])
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('/images/blog-posts')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail'),
                TextColumn::make('title')->limit('50')->sortable()->searchable(),
                TextColumn::make('slug')->limit('50'),
                TextColumn::make('category.name')->limit('50')->sortable()->searchable(),
                TextColumn::make('updated_at')
                    ->limit('50')
                    ->sortable()
                    ->date('M j, Y'),
            ])
            ->filters([
                SelectFilter::make('Category')->relationship('category', 'name')

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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
