<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
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

Route::get('/',[HomeController::class, 'index'])->middleware('can:admin.index')->name('admin.index');

Route::middleware(['auth:sanctum', 'verified', 'can:admin.products.index'])->resource('products', ProductController::class)->except('show')->names('admin.products');

Route::resource('categories', CategoryController::class)->middleware(['can:admin.categories.index'])->except('show')->names('admin.categories');

Route::middleware(['auth:sanctum', 'verified', 'can:admin.users.index'])->resource('users', UserController::class)->except('show')->names('admin.users');

Route::middleware(['auth:sanctum', 'verified', 'can:admin.roles.index'])->resource('roles', RoleController::class)->except('show')->names('admin.roles');
