<?php

namespace App\Filament\Resources\LocalSeoResource\Pages;

use App\Filament\Resources\LocalSeoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLocalSeo extends CreateRecord
{
    protected static string $resource = LocalSeoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
