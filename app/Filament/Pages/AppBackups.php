<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use ShuvroRoy\FilamentSpatieLaravelBackup\Pages\Backups as Backups;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class AppBackups extends Backups
{
    use HasPageShield;

    protected static string $view = 'filament.pages.app-backups';
}
