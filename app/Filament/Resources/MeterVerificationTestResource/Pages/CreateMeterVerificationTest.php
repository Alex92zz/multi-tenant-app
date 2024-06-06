<?php

namespace App\Filament\Resources\MeterVerificationTestResource\Pages;

use App\Filament\Resources\MeterVerificationTestResource;
use Cheesegrits\FilamentGoogleMaps\Concerns\InteractsWithMaps;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMeterVerificationTest extends CreateRecord
{
    use InteractsWithMaps;
    protected static string $resource = MeterVerificationTestResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
