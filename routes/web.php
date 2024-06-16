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

/* --------------------------------  Blog  ------------------------------------- */
Route::get('/blog', [BlogPageController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/{slug}', [LocalSEOController::class, 'show'])->name('localSEO.show');
Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');


Route::get('/sitemap', [SitemapController::class, 'index'])->name('index');


Route::post('contact-form/submit', [ContactFormController::class, 'submit'])->name('contactForm.submit');

/* --------------------------------  Register  ------------------------------------- */
Route::get('/admin/register', [RegisterController::class, 'showRegistrationForm'])->name('register-page');
Route::post('/admin/register', [RegisterController::class, 'register'])->name('register');

