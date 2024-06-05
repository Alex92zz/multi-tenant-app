<?php

namespace App\Filament\Resources\MeterAbortReportResource\Pages;

use App\Filament\Resources\MeterAbortReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMeterAbortReport extends EditRecord
{
    protected static string $resource = MeterAbortReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
