<?php

use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CartDetailController;
use App\Http\Controllers\Admin\ManufactureController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProtypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CartController as ControllersCartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProfileController;

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
//Route::get('/{page?}', [MyController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    Route::group([
        'middleware' => 'is_admin',
    ], function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::view('profile', 'admin.profile')->name('profile');
        Route::put('profile', [ProfileController::class, 'update'])
            ->name('profile.update');

        Route::resource('manufactures', ManufactureController::class);
        Route::resource('products', ProductController::class);
        Route::resource('protypes', ProtypeController::class);
        Route::resource('users', UserController::class);
        Route::resource('carts', CartController::class);
        Route::resource('cart_details', CartDetailController::class);
    });

    Route::group([], function () {
        Route::get('/', [MyController::class, 'index']);
        Route::get('/productDetail', [MyController::class, 'productdetails']);
        Route::get('/productsearch', [MyController::class, 'productsearch']);
        Route::get('/product', [MyController::class, 'product']);
        Route::get('/protype', [MyController::class, 'protype']);

        
        // // Cart
        // Route::get('/shoping-cart', [ControllersCartController::class, 'index'])->name('cart.index');
        // Route::post('/cart', 'CartController@store')->name('cart.store');
        // Route::delete('/cart/{product}/{cart}', 'CartController@destroy')->name('cart.destroy');
        // Route::post('/cart/save-later/{product}', 'CartController@saveLater')->name('cart.save-later');
        // Route::post('/cart/add-to-cart/{product}', 'CartController@addToCart')->name('cart.add-to-cart');
        // Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');

        // // checkout
        // Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
        // Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
        // Route::get('/guest-checkout', 'CheckoutController@index')->name('checkout.guest');

    });
});
Route::get('/', [MyController::class, 'index']);
Route::get('/productDetail', [MyController::class, 'productdetails']);
Route::get('/productsearch', [MyController::class, 'productsearch']);
Route::get('/protype', [MyController::class, 'protype']);
Route::get('/product', [MyController::class, 'product']);

require __DIR__ . '/auth.php';
