<?php

use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});

Route::get('/chat', function() {
    return view('chat');
})->middleware('auth');

Route::get('/messages', function(){
    $data = DB::table('messages')
            ->join('users', 'user_id', '=', 'users.id')
            ->select('messages.*', 'users.name')
            ->get();
    return $data;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
