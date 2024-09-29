<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

/* Products
 * List and detail of products
 */
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create',           [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store',           [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}',        [ProductController::class, 'show'])->name('products.show');

/*
 * Route of Admin
 */
Route::prefix('/admin')->group(function () {
    Route::name('admin.')->group(function () {

        /* Categories
         * List, detail, create, update of products
         */
        Route::prefix('/categories')->group(function () {
            Route::name('categories.')->group(function () {
                Route::get('/',                 [CategoryController::class, 'index'])->name('index');
                Route::get('/create',           [CategoryController::class, 'create'])->name('create');
                Route::post('/store',           [CategoryController::class, 'store'])->name('store');
                Route::get('/{category}',       [CategoryController::class, 'show'])->name('show');
                Route::get('/{category}/edit',  [CategoryController::class, 'edit'])->name('edit');
                Route::put('/{category}',       [CategoryController::class, 'update'])->name('update');
            });
        });
    });
});
