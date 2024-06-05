<?php

namespace App\Filament\Resources\MeterAbortReportResource\Pages;

use App\Filament\Resources\MeterAbortReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMeterAbortReports extends ListRecords
{
    protected static string $resource = MeterAbortReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
