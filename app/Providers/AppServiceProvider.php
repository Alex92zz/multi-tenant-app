<?php

namespace App\Providers;

use App\Filament\Pages\Converter;
use App\Models\Post;
use App\Models\Category;
use App\Models\LocalSEO;
use App\Models\Project;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DatabaseConnectionCountCheck;
use Spatie\Health\Checks\Checks\DatabaseSizeCheck;
use Spatie\Health\Checks\Checks\DatabaseTableSizeCheck;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\PingCheck;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Checks\Checks\RedisMemoryUsageCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HasForms::class, Converter::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Use view composer to share recent blog posts with the navbar
        View::composer(['components.navbar', 'components.footer', 'components.blog-page-sidebar', 'components.home-page-blog-area-2'], function ($view) {
            $recentBlogPosts = Post::latest()->take(5)->get();
            $recentProjects = Project::latest()->take(5)->get();
            $allCategories = Category::all();
            $localSEOs = LocalSEO::latest()->take(3)->get();
            $view->with([
                'recentBlogPosts' => $recentBlogPosts,
                'recentProjects' => $recentProjects,
                'categories' => $allCategories,
                'localSEOs' => $localSEOs
            ]);
        });
    }
}
