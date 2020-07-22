<?php

use Illuminate\Support\Facades\Route, App\Item;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [
    'as' => 'todo',
    'users' => 'TodoController@index'
]);

*/

Route::get('/', 'TodoController@index')->name('todo')->middleware('auth');
Route::post('/', 'TodoController@postIndex')->name('todo');

Route::get('/login', 'AuthController@getLogin')->name('user-login');

Route::post('/login', 'AuthController@postLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new', 'TodoController@getNew')->name('new-task');

Route::post('/new', 'TodoController@postNew')->name('new-task');

Route::bind('item', function($value, $route){
    return Item::where('id', $value)->first();
});

Route::get('/delete/{item}', 'TodoController@getDelete')->name('delete-task');