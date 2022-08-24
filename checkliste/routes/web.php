<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChecklistController;

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

// Route::get('/', [ChecklistController::class, 'index'] );

Route::get('/', [ChecklistController::class, 'index']);
Route::post('/saveItemRoute', [ChecklistController::class, 'saveItem'])->name('saveItem');
Route::post('/markCompleteRoute/{id}', [ChecklistController::class, 'markComplete'])->name('markComplete');
