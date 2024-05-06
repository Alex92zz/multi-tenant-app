<?php

namespace App\Livewire;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Employees extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                // ...
            )
            ->columns([
                TextColumn::make('name')->limit('50')->searchable(),
                TextColumn::make('role')
                ->limit('50')
                ->sortable()
                ->badge()
                ->color(fn (string $state): string => match ($state) {
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
            ]);
    }
}
