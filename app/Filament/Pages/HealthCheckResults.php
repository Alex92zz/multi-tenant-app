<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults as BaseHealthCheckResults;
use Filament\Contracts\Plugin;
use Filament\Panel;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class HealthCheckResults extends BaseHealthCheckResults
{

    use HasPageShield;

    protected static string $view = 'filament.pages.health-check-results';

    protected string $page = HealthCheckResults::class;

    public function register(Panel $panel): void
    {
        // @phpstan-ignore-next-line
        $panel->pages([$this->getPage()]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public function getId(): string
    {
        return 'filament-spatie-health';
    }

    public static function make(): static
    {
        return new static();
    }

    public function usingPage(string $page): static
    {
        $this->page = $page;

        return $this;
    }

    public function getPage(): string
    {
        return $this->page;
    }
    
}
