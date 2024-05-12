<?php

namespace App\Filament\Resources\CompletedConversionResource\Pages;

use App\Filament\Resources\CompletedConversionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompletedConversion extends EditRecord
{
    protected static string $resource = CompletedConversionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
