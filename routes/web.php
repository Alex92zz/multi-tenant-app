<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Services\BlockPavingPageController;
use App\Http\Controllers\BlogPageController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\LocalSEOController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Services\FencingPageController;
use App\Http\Controllers\Services\TarmacSurfacingController;
use App\Http\Controllers\Services\TurfingPageController;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* --------------------------------  Contact  ------------------------------------- */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', [HomePageController::class, 'index'])->name('home');



/* ------------------------------- About Pages ------------------------------*/
Route::get('/about-mld', function () {
    return view('about-pages.about-mld');
});

Route::get('/about-fmvgroup', function () {
    return view('about-pages.about-fmvgroup');
});

Route::get('/about-flowlee-meter-verification', function () {
    return view('about-pages.about-flowlee-meter-verification');
});



/* ------------------------------- Services Pages ------------------------------*/
Route::get('/meter-verification', function () {
    return view('services-pages.meter-verification');
});

Route::get('/electromagnetic-metering-services', function () {
    return view('services-pages.electromagnetic-metering-services');
});

Route::get('/meter-xchange', function () {
    return view('services-pages.meter-xchange');
});

Route::get('/leak-detection-services', function () {
    return view('services-pages.leak-detection-services');
});

Route::get('/products', function () {
    return view('products');
});


/* -------------------------------Footer Pages ------------------------------*/
Route::get('/anti-bribery-policy', function () {
    return view('footer-pages.anti-bribery-policy');
});
Route::get('/modern-slavery-act-statement', function () {
    return view('footer-pages.modern-slavery-act-statement');
});
Route::get('/privacy-policy', function () {
    return view('footer-pages.privacy-policy');
});

/* --------------------------------  Blog  ------------------------------------- */
Route::get('/blog', [BlogPageController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('project/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/{slug}', [LocalSEOController::class, 'show'])->name('localSEO.show');
Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');




Route::get('/sitemap', [SitemapController::class, 'index'])->name('index');


Route::post('contact-form/submit', [ContactFormController::class, 'submit'])->name('contactForm.submit');

/* --------------------------------  Register  ------------------------------------- */
Route::get('/admin/register', [RegisterController::class, 'showRegistrationForm'])->name('register-page');
Route::post('/admin/register', [RegisterController::class, 'register'])->name('register');

