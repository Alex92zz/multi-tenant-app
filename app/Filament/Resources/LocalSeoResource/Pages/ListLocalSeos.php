<?php

namespace App\Filament\Resources\LocalSeoResource\Pages;

use App\Filament\Resources\LocalSeoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLocalSeos extends ListRecords
{
    protected static string $resource = LocalSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
