<?php

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

Route::get('/', function () {
    return view('admin.dashboard');
})->middleware('auth');

Route::resource('location','LocationsController');
Route::resource('tasks','TaskController');
Route::resource('users','UsersController');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Route::get('/reports', 'TaskController@reports');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/tasks', function () {
//     return view('tasks.tasks');
// });


