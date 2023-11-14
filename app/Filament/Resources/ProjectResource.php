<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Closure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use Filament\Facades\Filament;
use Illuminate\Support\Str;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Storage;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

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
                    ->required()
                        ->directory('/images/projects'),
                    RichEditor::make('content')->required()->disableToolbarButtons([
                            // 'attachFiles',
                            'codeBlock',
                        ])
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('/images/projects'),
                    FileUpload::make('Photo1')
                        ->directory('/images/projects'),
                        FileUpload::make('Photo2')
                        ->directory('/images/projects'),
                        FileUpload::make('Photo3')
                        ->directory('/images/projects'),
                        FileUpload::make('Photo4')
                        ->directory('/images/projects'),
                        FileUpload::make('Photo5')
                        ->directory('/images/projects'),
                        FileUpload::make('Photo6')
                        ->directory('/images/projects'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }    
}
