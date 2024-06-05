<?php

namespace App\Filament\Resources\MeterReplacementSurveyResource\Pages;

use App\Filament\Resources\MeterReplacementSurveyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMeterReplacementSurveys extends ListRecords
{
    protected static string $resource = MeterReplacementSurveyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
