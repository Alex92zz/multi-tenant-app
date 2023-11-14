<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Events\PostCreated;
use App\Filament\Resources\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function perform()
    {
        $record = parent::perform();

        // Dispatch the PostCreated event
        event(new PostCreated($record));

        return $record;
    }
}
