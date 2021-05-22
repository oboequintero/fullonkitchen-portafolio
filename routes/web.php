<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\ProductController;

Route::view('/', 'welcome');

Auth::routes();

//Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('Usuarios', UserController::class)->names('admin.users');
Route::post('Usuarios/{rol}', [UserController::class, 'role'])->name('users.role');
Route::post('Usuarios/{permission}', [UserController::class, 'permission'])->name('users.permission');

Route::resource('Roles', RoleController::class)->names('admin.rol');
Route::resource('Permisos', PermissionController::class)->names('admin.permissions');


Route::get('/products/{title}-{id}', [ProductController::class, 'showProduct'])->name('products.show');
Route::get('/postmate_list/{id}', [ProductController::class, 'showPostmateList'])->name('postmate.list');
#Route::get('products/{title}-{id}', 'ProductController@showProduct')->name('products.show');

Route::get('/test', [TestController::class, 'test'])->name('admin.test');