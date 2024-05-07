<?php

namespace App\Filament\Resources\MeterVerificationTestResource\Pages;

use App\Filament\Resources\MeterVerificationTestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMeterVerificationTests extends ListRecords
{
    protected static string $resource = MeterVerificationTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
