<?php

use App\Http\Controllers\admin\ordersController;
use App\Http\Controllers\admin\pagesController as AdminPagesController;
use App\Http\Controllers\admin\productsController;
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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

//Route::get('/Zeeshan', [pagesController::class, 'home']);


Route::get('/',[PagesController::class, 'home'])->name('home');

//Route::get('/Zeeshan',[PagesController::class, 'Zeeshan'])->name('Zeeshan');

Route::get('/cart',[PagesController::class, 'cart'])->name('cart');

Route::get('/shop',[PagesController::class, 'shop'])->name('shop');

Route::get('/checkout',[PagesController::class, 'checkout'])->name('checkout');

Route::get('/about',[PagesController::class, 'about'])->name('about');

Route::get('/contact',[PagesController::class, 'contact'])->name('contact');

//Route admin panel

Route::prefix('admin')->namespace('admin')->group(function(){ 

    Route::get('/dashboard',[AdminPagesController::class, 'dashboard'])->name('admin.dashboard');
Route::prefix('products')->group(function() {
    Route::get('/create',[productsController::class, 'create'])->name('create.products');
    Route::get('/all',[productsController::class, 'all'])->name('all.products');
    Route::get('/categories',[productsController::class, 'categories'])->name('admin.categories');

});
Route::prefix('orders')->group(function(){
    Route::get('/new',[ordersController::class, 'new'])->name('new.orders');
    Route::get('/completed',[ordersController::class, 'completed'])->name('completed.orders');
    Route::get('/processing',[ordersController::class, 'processing'])->name('processing.orders');
    Route::get('/canceled',[ordersController::class, 'canceled'])->name('canceled.orders');
});

});


//Route::get('/admin/dashboard','admin/pagesController@dashboard')->name('admin.dashboard');


//Route::get('/admin/dashboard',[PagesController::class, 'dashboard'])->name('admin.dashboard');

//Route::get('/admin/products',[PagesController::class, 'products'])->name('admin.products');

//Route::get('/admin/dashboard', '\admin/dashboard/pagesController@dashboard');

//Route::get('/admin/dashboard', 'App\Http\Controllers\admin@dashboard');

//Route::get('/admin/dashboard',[PagesController::class, 'admin.dashboard'])->name('admin.dashboard');

//
//public function dashboard(){
 //   return view ('dashboard');
//}
//Route::get('/admin/dashboard', [pagesController::class, 'dashboard']);


//Route::get('/admin/dashboard', 'admin/pagesController@dashboard')->name('admin.dashboard');

//Route::get('/admin/dashboard','admin\pagesController@dashboard')->name('admin.dashboard');

///Route::get('/admin/dashboard', funtion (){
   // return view "Hello Admin";
///})->name('admin.dashboard');


//Route::get('/admin/dashboard',[pagesController::class, 'dashboard'])->name('admin.dashboard');