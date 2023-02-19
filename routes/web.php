<?php


use App\Http\Controllers\User\CustomerController;
use App\Http\Middleware\Zon;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('customer.home');
    })->name('dashboard');

    Route::group(['prefix'=> 'customer', 'middleware' => 'zon_middleware'],function(){
        Route::get('home',[CustomerController::class,'home']);
        Route::get('about',[CustomerController::class,'about']);
        Route::get('service',[CustomerController::class,'service']);
    
    }); 
    Route::get('userPage',function(){
         return "userPage";
    });
});






