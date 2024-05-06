<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-m-user-group';

    protected static ?string $navigationGroup = 'User Management';

    public static function form(Form $form): Form
    {

        // Fetch the current record
        $role = $form->getRecord()->getRoleNames()->first();


        // Determine which roles should be displayed in the select field based on the user's role
        $allowedRoles = match ($role) {
            'super_admin' => ['employee'],
            'employee' => ['super_admin', 'unassigned'],
            'client' => ['unassigned'],
            'unassigned' => ['employee', 'client'],
            default => ['unassigned'],
        };

        // Fetch roles from the Spatie model
        $rolesFromModel = Role::whereIn('name', $allowedRoles)->get()->pluck('name', 'id');

        // Build the select field with allowed roles
        $selectField = Select::make('roles')
            ->options($rolesFromModel)
            ->preload();


        return $form
            ->schema([
                Card::make()->schema([
                    $selectField,
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->limit('50')->searchable(),
                TextColumn::make('role')
                    ->limit('50')
                    ->sortable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'unassigned' => 'gray',
                        'employee' => 'warning',
                        'super_admin' => 'success',
                        'client' => 'danger',
                    })
                    ->state(function ($record) {
                        // Retrieve the user associated with the current record
                        $user = $record->getModel();

                        // Get the roles associated with the user
                        $roles = $user->getRoleNames();

                        // You can format the roles as needed, for example:
                        return $roles;
                    }),
            ])

            ->filters([
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
