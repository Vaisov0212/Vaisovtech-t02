<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ViewController::class, 'index'])->name('home');
Route::post('/contact',[ContactController::class, 'create'])->name('contact_create');

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['uz', 'ru', 'en'])) {
        abort(404);
    }

    Session::put('locale', $locale);
    App::setLocale($locale);

    return redirect()->back();
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/crud', [CrudController::class,'create'])->name('create');
// Route::post('/crud', [CrudController::class,'store'])->name('store');


Route::prefix('vaisov713')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/hero', [HeroController::class,'index'])->name('hero');
    Route::put('/hero/{id}', [HeroController::class,'update'])->name('hero_update');
    Route::get('/resume', [AdminController::class,'resume'])->name('resume');
    Route::get('/services', [AdminController::class,'services'])->name('services');
    Route::get('/settings', [AdminController::class,'settings'])->name('settings');
    Route::get('/skills', [AdminController::class,'skills'])->name('skills');
    Route::get('/portfolio', [AdminController::class,'portfolio'])->name('portfolio');
    Route::get('/contact', [ContactController::class,'index'])->name('contact');

});

require __DIR__.'/auth.php';
