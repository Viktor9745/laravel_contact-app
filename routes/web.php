<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return redirect()->route('contacts.index');
});
Route::middleware('auth')->group(function(){
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});
Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
