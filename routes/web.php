<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    Route::get('/index', [SubscriptionsController::class, 'index'])->name('index');
    Route::get('/plans_abonnement', [SubscriptionsController::class, 'plans_abonnement'])->name('plans_abonnement');
    Route::post('/add_subscription', [SubscriptionsController::class, 'add_subscription'])->name('add_subscription');
    Route::get('/delete_sub/{id}', [SubscriptionsController::class, 'delete_sub'])->name('delete_sub');
    Route::get('/form_Update_sub/{id}', [SubscriptionsController::class, 'form_Update_sub'])->name('form_Update_sub');
    Route::post('/Update_subscription/{id}', [SubscriptionsController::class, 'Update_subscription'])->name('Update_subscription');

});

require __DIR__.'/auth.php';
