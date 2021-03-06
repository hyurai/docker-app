<?php

use Illuminate\Support\Facades\Route;
use App\Services\Hellow;
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
Route::resource('infomation', 'InfomationController');  
Route::get('/hellow',function(Hellow $hellow){
    return $hellow->getMessage();
});
