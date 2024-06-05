<?php

namespace App\Filament\Resources\MeterReplacementSurveyResource\Pages;

use App\Filament\Resources\MeterReplacementSurveyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMeterReplacementSurvey extends EditRecord
{
    protected static string $resource = MeterReplacementSurveyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
