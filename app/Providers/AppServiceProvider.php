<?php

namespace App\Providers;

use App\Filament\Pages\HomePageBlocksPage;
use App\Models\Post;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HasForms::class, HomePageBlocksPage::class);
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Use view composer to share recent blog posts with the navbar
        View::composer(['components.navbar', 'components.footer'], function ($view) {
            $recentBlogPosts = Post::latest()->take(5)->get();
            $view->with([
                'recentBlogPosts' => $recentBlogPosts,
            ]);
        });
    }
}
