<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogPageController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\LocalSEOController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProjectController;

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

Route::get('/block-paving', function () {
    return view('services.block-paving');
})->name('block-paving');

Route::get('/turfing', function () {
    return view('services.turfing');
})->name('turfing');

Route::get('/fencing', function () {
    return view('services.fencing');
})->name('fencing');

Route::get('/tree-removal', function () {
    return view('services.tree-removal');
})->name('tree-removal');

Route::get('/tarmac-surfacing', function () {
    return view('services.tarmac-surfacing');
})->name('tarmac-surfacing');

/* --------------------------------  Services  ------------------------------------- */



/* --------------------------------  Digital Marketing  ------------------------------------- */



/* --------------------------------  Website Management  ------------------------------------- */


/* --------------------------------  Blog  ------------------------------------- */
Route::get('/blog', [BlogPageController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('project/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/{slug}', [LocalSEOController::class, 'show'])->name('localSEO.show');
Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');





/* --------------------------------  Other  ------------------------------------- */
Route::get('/sitemap', [SitemapController::class, 'index'])->name('sitemap');
Route::post('contact-form/submit', [ContactFormController::class, 'submit'])->name('contactForm.submit');


Route::get('/admin/register', [RegisterController::class, 'showRegistrationForm'])->name('register-page');
Route::post('/admin/register', [RegisterController::class, 'register'])->name('register');