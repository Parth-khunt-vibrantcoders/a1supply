<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\AboutusController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FacalityController;
use App\Http\Controllers\backend\LoginController;
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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    echo "Cache is cleared<br>";
    Artisan::call('route:clear');
    echo "route cache is cleared<br>";
    Artisan::call('config:clear');
    echo "config is cleared<br>";
    Artisan::call('view:clear');
    echo "view is cleared<br>";
});

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('container-trailer-yard', [ServicesController::class, 'container_trailer_yard'])->name('container-trailer-yard');
Route::get('transload-cross-dock', [ServicesController::class, 'transload_cross_dock'])->name('transload-cross-dock');
Route::get('dedicated', [ServicesController::class, 'dedicated'])->name('dedicated');
Route::get('shuttle-services', [ServicesController::class, 'shuttle_services'])->name('shuttle-services');
Route::get('ftl', [ServicesController::class, 'ftl'])->name('ftl');

Route::get('about-us', [AboutusController::class, 'about_us'])->name('about-us');
Route::get('leadership', [AboutusController::class, 'leadership'])->name('leadership');

Route::get('all-location', [FacalityController::class, 'all_location'])->name('all-location');

Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact-submit', [ContactController::class, 'contact_submit'])->name('contact-submit');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('check-login', [LoginController::class, 'check_login'])->name('check-login');
Route::get('/testing-mail', [LoginController::class, 'testingmail'])->name('testing-mail');
