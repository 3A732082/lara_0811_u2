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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',['as'=>'home.lndex','uses'=>'HomeController@index']);

Route::get('r1', function () {
    return redirect('r2');
});
Route::get('r2', function () {
    return view('welcome');

});

Route::get('hello/{name?}',['as' =>'hello.index',function($name='Everybody'){
    return'Hello,'.$name;
}]);

/*
Route::get('hello/{name?}',function($name='Everybody'){
    return'Hello,'.$name;
})->name(hello.lindex);
*/
Route::get('r3', function () {
    return view('welcome');

});

//設定dashboard路徑的route
Route::get('dashboard', function () {
    return 'dashboard';
});
//設定prefix
Route::group(['prefix'=>'admin'],function (){
    Route::get('dashboard',function (){
        return 'admin dashboard';
    });
});
