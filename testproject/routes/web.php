<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::resource('posts', 'PostController');
Auth::routes();
Route::get('/home', 'HomeController@index'); //->name('home');



// Route::get('/about', function(){
//     return view('pages.about');
// });

/*
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is userID '  .$id .' with the name ' .$name;
});
*/