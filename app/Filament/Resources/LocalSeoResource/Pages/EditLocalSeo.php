<?php

namespace App\Filament\Resources\LocalSeoResource\Pages;

use App\Filament\Resources\LocalSeoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLocalSeo extends EditRecord
{
    protected static string $resource = LocalSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
