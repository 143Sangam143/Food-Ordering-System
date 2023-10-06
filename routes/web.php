<?php

use App\Http\Controllers\Backend\BackendRestaurantController;
use App\Http\Controllers\frontend\EsewaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ServiceController;

use App\Http\Controllers\Backend\BackendHomeController;
use App\Http\Controllers\Backend\BackendServiceController;
use App\Http\Controllers\Backend\BackendServiceListController;
use App\Http\Controllers\Backend\BackendProductController;
use App\Http\Controllers\Backend\BackendProductListController;
use App\Http\Controllers\Backend\VerifyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/******************************* Public Routes ****************************************/ 
Route::get('/', function () {
    return view('home');
})->name('home');
route::get('/home', [HomeController::class, 'userfront']);

/******************************* User Routes ****************************************/ 
route::group(["middleware" => 'user'], function() {
    route::get('/', [HomeController::class, 'index'])->name('home');
    route::get('/about', [HomeController::class, 'about'])->name('about');
    route::group(['prefix' => 'restaurants'], function () {
        route::get('/', [ProductController::class, 'restaurant_list'])->name('restaurants');
        route::group(['prefix' => 'products'], function () {
            route::get('/{id}', [ProductController::class, 'p_category'])->name('products');
            route::get('/list/{id}', [ProductController::class, 'list'])->name('products.list');
            route::group(['middleware' => 'auth'], function(){
                route::post('/list/{id}/cart', [ProductController::class, 'cart'])->name('products.cart');
                route::get('/checkout/success', [EsewaController::class, 'success'])->name('esewa.success');
                route::get('/checkout/failure', [EsewaController::class, 'failure'])->name('esewa.failure');
                route::get('/payment/response', [EsewaController::class, 'response'])->name('payment.response');
                route::get('/checkout', [ProductController::class, 'checkout'])->name('products.checkout');
            });
        });
        route::group(['middleware' => 'auth'], function(){
            route::get('/cartlist', [ProductController::class, 'cartlist'])->name('products.cartlist');
            route::get('/cartlist/delete/{id}', [ProductController::class, 'cartlist_delete'])->name('products.carlist.delete');
            route::get('/cartlist/deletebyname/{name}', [ProductController::class, 'cartlist_delete_name'])->name('products.carlist.delete.name');
            route::post('/cartlist/update', [ProductController::class, 'cartlist_update_quantity'])->name('products.cartlist.update.quantity');
        });
    });
    route::group(['prefix' => 'services'], function () {
        route::get('/', [ServiceController::class, 's_category'])->name('services');
        route::get('/list/{category}', [ServiceController::class, 'list'])->name('services.list');
        route::get('/list/{category}/details', [ServiceController::class, 'details'])->name('services.list.details')->middleware('user');
        // route::get('/list/{category}/details', [ServiceController::class, 'details'])->name('services.list.details');
        route::post('/list/{category}/details/add', [ServiceController::class, 'add_report'])->name('services.list.details.add-report')->middleware('user');
        route::get('/list/{category}/details/download', [ServiceController::class, 'download'])->name('services.list.details.download')->middleware('user');
    });
    route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
});

/******************************* Admin Routes ****************************************/ 
route::group(['middleware' => 'admin', 'prefix' => 'backend'], function() {
    route::get('/home', [BackendHomeController::class, 'index'])->name('backend.home');
    route::get('/verify', [VerifyController::class, 'verify'])->name('backend.verify');
    route::post('/verify/verification/{id}', [VerifyController::class, 'verification'])->name('backend.verify.verification');
    route::get('/about', [HomeController::class, 'about'])->name('backend.about');

    route::group(['prefix' => 'restaurants'], function(){
        route::get('/', [BackendRestaurantController::class, 'r_list'])->name('backend.restaurants');
        route::get('/delete_restaurant/{id}', [BackendRestaurantController::class, 'delete_restaurant'])->name('backend.restaurants.delete');
        route::get('/update_restaurant/{id}', [BackendRestaurantController::class, 'update_restaurant'])->name('backend.restaurants.update');
        route::post('/update_restaurant_confirm/{id}', [BackendRestaurantController::class, 'update_restaurant_confirm'])->name('backend.restaurants.update-confirm');

        route::group(["prefix"=> 'products'], function() {
            route::group(["prefix" => 'category'], function() {
                route::get('/{id}', [BackendProductController::class, 'p_category'])->name('backend.products');
                route::post('/', [BackendProductController::class, 'add_category'])->name('backend.products.category.add');
                route::get('/delete_category/{id}', [BackendProductController::class, 'delete_category'])->name('backend.products.category.delete');
                route::get('/update_category/{id}', [BackendProductController::class, 'update_category'])->name('backend.products.category.update');
                route::post('/update_category_confirm/{id}', [BackendProductController::class, 'update_category_confirm'])->name('backend.products.category.update-confirm');
            });
    
            route::group(["prefix" => 'lists'], function() {
                route::get('/{category}', [BackendProductListController::class, 'p_list'])->name('backend.products.list');
                route::post('/', [BackendProductListController::class, 'add_list'])->name('backend.products.list.add');
                route::get('/delete_list/{id}', [BackendProductListController::class, 'delete_list'])->name('backend.products.list.delete');
                route::get('/update_list/{id}', [BackendProductListController::class, 'update_list'])->name('backend.products.list.update');
                route::post('/update_list_confirm/{id}', [BackendProductListController::class, 'update_list_confirm'])->name('backend.products.list.update-confirm');
            });    
            route::get('/list/details', [BackendProductController:: class, 'details'])->name('backend.products.list.details');
        });
    })->name('restaurants');

    route::group(["prefix"=> 'services'], function() {
        route::group(["prefix" => 'category'], function() {
            route::get('/', [BackendServiceController::class, 's_category'])->name('backend.services');
            route::post('/', [BackendServiceController::class, 'add_category'])->name('backend.services.category.add');
            route::get('/delete_category/{id}', [BackendServiceController::class, 'delete_category'])->name('backend.services.category.delete');
            route::get('/update_category/{id}', [BackendServiceController::class, 'update_category'])->name('backend.services.category.update');
            route::post('/update_category_confirm/{id}', [BackendServiceController::class, 'update_category_confirm'])->name('backend.services.category.update-confirm');
        });

        route::group(["prefix" => 'lists'], function() {
            route::get('/{category}', [BackendServiceListController::class, 's_list'])->name('backend.services.list');
            route::post('/', [BackendServiceListController::class, 'add_list'])->name('backend.services.list.add');
            route::get('/delete_list/{id}', [BackendServiceListController::class, 'delete_list'])->name('backend.services.list.delete');
            route::get('/update_list/{id}', [BackendServiceListController::class, 'update_list'])->name('backend.services.list.update');
            route::post('/update_list_confirm/{id}', [BackendServiceListController::class, 'update_list_confirm'])->name('backend.services.list.update-confirm');
        });    
        route::get('/list/details', [BackendServiceController:: class, 'details'])->name('backend.services.list.details');
    });
    route::get('/contact-us', [BackendHomeController::class, 'contact'])->name('backend.contact-us');
});

/******************************* Restaurant Routes ****************************************/ 
route::group(['middleware' => 'restaurant', 'prefix' => 'backend'], function(){
    route::get('/restaurant', [BackendRestaurantController::class, 'index'])->name('backend.restaurant.home');
});

/******************************* Extra Routes ****************************************/ 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});