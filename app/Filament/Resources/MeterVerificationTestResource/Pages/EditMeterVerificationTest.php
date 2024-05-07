<?php

namespace App\Filament\Resources\MeterVerificationTestResource\Pages;

use App\Filament\Resources\MeterVerificationTestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMeterVerificationTest extends EditRecord
{
    protected static string $resource = MeterVerificationTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
}
