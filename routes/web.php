<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SvgMapController;
use App\Http\Controllers\FAQController;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * get svg maps
 * Params 
 * perPage : number, default : 5
 * page : number, default : 1
 */
Route::get('/svg-maps', [SvgMapController::class, 'index'])->name('svg-maps.index');


Route::get('/faqs', [FAQController::class, 'index'])->name('faqs.index');

Route::middleware('auth')->group(function () {
    Route::get('/faqs/create', [FAQController::class, 'create']);
    Route::post('/faqs', [FAQController::class, 'store']);
    Route::get('/faqs/{id}/edit', [FAQController::class, 'edit']);
    Route::put('/faqs/{id}', [FAQController::class, 'update']);
    Route::delete('/faqs/{id}', [FAQController::class, 'destroy']);    
});

Route::resource('faqs', FAQController::class)->middleware('auth');

require __DIR__.'/auth.php';
