<?php

namespace App\Filament\Resources\SitemapResource\Pages;

use App\Filament\Resources\SitemapResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSitemaps extends ListRecords
{
    protected static string $resource = SitemapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
