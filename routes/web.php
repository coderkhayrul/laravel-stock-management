<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // ALL USER ROUTE LIST
    Route::get('/users', [UserController::class, 'index'])->name('admin.user');
    Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/user/{id}', [UserController::class, 'show'])->name('admin.user.show');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::post('/user/softdelete/{id}', [CategoryController::class, 'softdelete'])->name('admin.user.softdelete');
    Route::post('/user/restore/{id}', [CategoryController::class, 'restore'])->name('admin.user.restore');
    Route::post('/user/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.user.destroy');

    // ALL ROLE ROUTE LIST
    Route::get('/role', [RoleController::class, 'index'])->name('admin.role');
    Route::get('/role/create', [RoleController::class, 'create'])->name('admin.role.create');
    Route::post('/role/store', [RoleController::class, 'store'])->name('admin.role.store');
    Route::get('/role/edit/{slug}', [RoleController::class, 'edit'])->name('admin.role.edit');
    Route::put('/role/update/{slug}', [RoleController::class, 'update'])->name('admin.role.update');
    Route::delete('/role/destroy/{slug}', [RoleController::class, 'destroy'])->name('admin.role.destroy');

    // All Product Category Routes
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');

    Route::post('/category/softdelete/{slug}', [CategoryController::class, 'softdelete'])->name('admin.category.softdelete');
    Route::post('/category/restore/{slug}', [CategoryController::class, 'restore'])->name('admin.category.restore');
    Route::delete('/category/destroy/{slug}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
});




require __DIR__ . '/auth.php';
