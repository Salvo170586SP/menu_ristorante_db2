<?php

use App\Http\Controllers\AperitifController;
use App\Http\Controllers\DessertController;
use App\Http\Controllers\InternationalLongDrinkController;
use App\Http\Controllers\LongDrinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedWineController;
use App\Http\Controllers\SpecialLongDrinkController;
use App\Http\Controllers\WhiteWineController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    //Aperitivi
    Route::resource('/aperitifs',  AperitifController::class);
    
    //Desserts
    Route::resource('/desserts',  DessertController::class);

    //LongDrinks
    Route::resource('/long_drinks',  LongDrinkController::class);
    
    //SpecialLongDrinks
    Route::resource('/special_long_drinks',  SpecialLongDrinkController::class);

    //InternationalLongDrinks
    Route::resource('/international_long_drinks',  InternationalLongDrinkController::class);

    //White Wines
    Route::resource('/white_wines',  WhiteWineController::class);

    //Red Wines
    Route::resource('/red_wines',  RedWineController::class);
});