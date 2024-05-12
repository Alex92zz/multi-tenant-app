<?php

namespace App\Filament\Resources\CompletedConversionResource\Pages;

use App\Filament\Resources\CompletedConversionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompletedConversions extends ListRecords
{
    protected static string $resource = CompletedConversionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
