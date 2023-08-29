<?php

use App\Http\Livewire\ContactForm;
use App\Http\Livewire\Confirm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', ContactForm::class)->name('contact');
Route::get('/contacts/confirm', Confirm::class)->name('confirm');
Route::post('/thanks', [ContactController::class, 'store']);

Route::get('/contacts/management', [ContactController::class, 'management']);
Route::delete('/contacts/delete', [ContactController::class, 'destroy']);
Route::get('/contacts/search', [ContactController::class, 'search']);