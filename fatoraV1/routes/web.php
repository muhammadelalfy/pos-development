<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use Illuminate\Routing\Router;

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
})->name('fronts.index');

Route::get('command', function () {
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    return "cache is cleared successfully !! ";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    
    Route::prefix('admins')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\AdminsControllers@view')->name('admins.view');
        Route::post('/store','App\Http\Controllers\Dashboard\AdminsControllers@store')->name('admins.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\AdminsControllers@edit')->name('admins.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\AdminsControllers@update')->name('admins.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\AdminsControllers@delete')->name('admins.delete');
    });
    Route::prefix('setting')->group(function(){
            //settings
            Route::get('/setting','App\Http\Controllers\Dashboard\SettingsContrtoller@index')->name('setting');
            Route::post('/setting','App\Http\Controllers\Dashboard\SettingsContrtoller@update')->name('updatesetting');
    });

    //Roles
    Route::prefix('roles')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\RolesController@view')->name('roles.view');
        Route::post('/store','App\Http\Controllers\Dashboard\RolesController@store')->name('roles.store');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\RolesController@edit')->name('roles.edit');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\RolesController@update')->name('roles.update');
        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\RolesController@delete')->name('roles.delete');
    });


    Route::prefix('client')->group(function(){
        Route::get('/view','App\Http\Controllers\Dashboard\RolesController@view')->name('roles.vie');
        Route::post('/store/{id}','App\Http\Controllers\Dashboard\ClientController@store')->name('client.store');

        
        Route::get('/create','App\Http\Controllers\Dashboard\ClientController@create')->name('client.ctreate');
        Route::get('/hasOne','App\Http\Controllers\Dashboard\ClientController@hasOne')->name('client.hasOne');
        Route::get('/edit/{id}','App\Http\Controllers\Dashboard\RolesController@edit')->name('roles.edi');
        Route::post('/update/{id}','App\Http\Controllers\Dashboard\RolesController@update')->name('role.update');

        Route::get('/delete/{id}','App\Http\Controllers\Dashboard\RolesController@delete')->name('rols.delete');
    });

    
    
   ##################################################################################################################
   
    Route::get('/fatoraShow','App\Http\Controllers\Dashboard\FatoraController@index')->name('fatora.show');

   ##################################################################################################################

   Route::get('/fatoraAdd','App\Http\Controllers\Dashboard\OrderController2@Add_index')->name('fatora.add');
   Route::get('/orders','App\Http\Controllers\Dashboard\OrderController@store');
   Route::get('/orders2','App\Http\Controllers\Dashboard\OrderController2@store');
   Route::get('/ordersViewAdmin','App\Http\Controllers\Dashboard\OrderController2@index')->name('fatora.view');
   Route::post('/Bounce','App\Http\Controllers\Dashboard\BounceController@MakeBounce')->name('addBounce');
   Route::get('/AllBounceInvoices','App\Http\Controllers\Dashboard\BounceController@AllBounce')->name('allBounce');
   Route::get('/fatoraAdd','App\Http\Controllers\Dashboard\OrderController2@add');
   Route::get('/sendMail','App\Http\Controllers\Dashboard\MailController@email');  //make it auth


});

Route::get('/orders/{id}/{random?}/{chaname?}','App\Http\Controllers\Dashboard\OrderController2@orders');
Route::get('/bounces/{id}','App\Http\Controllers\Dashboard\BounceController@ordersbounce');
Route::get('/AdminBounce/{id}','App\Http\Controllers\Dashboard\OrderController2@ordersbounce');

################################################### START pursHASE  ###############################################################
Route::prefix('purshase')->group(function(){
    Route::get('/add','App\Http\Controllers\Dashboard\PurshaseController@index')->name('purshase.view');
    Route::post('/store','App\Http\Controllers\Dashboard\PurshaseController@store')->name('purshase.store');
    Route::get('/show/{id}/{hash?}','App\Http\Controllers\Dashboard\PurshaseController@show')->name('purshase.show');
    Route::get('/All','App\Http\Controllers\Dashboard\PurshaseController@showAllPurshase')->name('allPurshase');
});
  Route::post('/Bouncepurshase','App\Http\Controllers\Dashboard\BounceController@MakeBouncePurshase')->name('addBouncePurshase');
  Route::get('/AllBouncepurshase','App\Http\Controllers\Dashboard\BounceController@AllBouncePurshase')->name('allBouncePurshase');
  Route::get('/bouncespurshase/{id}','App\Http\Controllers\Dashboard\BounceController@purshaseBounce')->name('PurshaseBounce');

###################################################END purshase   ##############################################1

// Route::get('/orders/{id}/','App\Http\Controllers\Dashboard\OrderController2@ordersAll');


Route::get('qr-code-g', function () {
  
  return view('fatora.qrCode');
    
});