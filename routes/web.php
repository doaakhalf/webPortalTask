<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verification/{userId}', [App\Http\Controllers\Auth\RegisterController::class, 'verify'])->name('verify');

Route::group(['prefix' => 'customer'],function(){
    Route::group(['as' => 'customer'],function(){
        // ///////////////////////////////////////////////
        ########################################Auth routes#####################################
        Route::get('/verification/{userId}', [App\Http\Controllers\Auth\RegisterController::class, 'verify'])->name('verify');
        Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
        Route::post('/Clogin', [App\Http\Controllers\Auth\LoginController::class, 'customerLgin'])->name('Clogin');
        Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
        Route::post('/Cregister', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('Cregister');
        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'customerLogout'])->name('logout');
        ######################################################################################
        // //////////////////////////////////////////////////////////////////////////////////
        #######################USER creation ###################################
        Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('UserCreate');
        Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('UserStore');

        
    });
});

Route::group(['prefix' => 'user'],function(){
    Route::group(['as' => 'user'],function(){
        // ///////////////////////////////////////////////
        ########################################Auth routes#####################################
       
        Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
        Route::post('/Ulogin', [App\Http\Controllers\Auth\LoginController::class, 'userLgin'])->name('Ulogin');

        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('logout');
        ######################################################################################
        // //////////////////////////////////////////////////////////////////////////////////
        #######################USER home ###################################
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');
        ////////////////////////////////////////////
        ##################sales##############################
        Route::get('/sales', [App\Http\Controllers\SalesController::class, 'index'])->name('sales');

        // /////////////////////////////////////////////////////
        #################config#######################################
        Route::get('/config', [App\Http\Controllers\ConfigController::class, 'index'])->name('config');
        Route::get('/config/edit/{id}', [App\Http\Controllers\ConfigController::class, 'edit'])->name('configEdit');
        Route::post('/config/edit/{id}', [App\Http\Controllers\ConfigController::class, 'update'])->name('configUpdate');
   
    });
});
// ->middleware('verified');;

