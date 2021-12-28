<?php

use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('dashboard/users', [UserController::class, 'index'])->name('admin.users');
Route::get('dashboard/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('dashboard/user/store', [UserController::class, 'store'])->name('admin.user.store');


require __DIR__ . '/auth.php';
