<?php

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


// All User Routes
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('dashboard/users', [UserController::class, 'index'])->name('admin.users');
Route::get('dashboard/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('dashboard/user/store', [UserController::class, 'store'])->name('admin.user.store');
Route::get('dashboard/user/{id}', [UserController::class, 'show'])->name('admin.user.show');
Route::get('dashboard/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::post('dashboard/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');

// All Product Category Routes
Route::get('dashboard/categories', [CategoryController::class, 'index'])->name('admin.categories');
Route::get('dashboard/category/create', [CategoryController::class, 'create'])->name('admin.category.create');

require __DIR__ . '/auth.php';
