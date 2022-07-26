<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;

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


Route::get('/', [login::class, 'index'])->name('login');
Route::get('login', [login::class, 'index'])->name('login');
Route::get('signup', [login::class, 'signup'])->name('signup');
Route::post('post-login', [login::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [login::class, 'logout'])->name('logout');
Route::post('post-signup', [login::class, 'ragister'])->name('ragister.post'); 

Route::group(['middleware'=>['logincheck']],function()
{    
Route::get('home', [login::class,'home'])->name('welcome');
Route::get('tabale_data', [login::class, 'tableData']);
Route::get('get_data', [login::class, 'getData'])->name('getData');
});
