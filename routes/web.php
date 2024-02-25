<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OperateurController;
use App\Http\Controllers\OperateursController;
use App\Http\Controllers\RestaurantController;
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
    return view('front.admin.subscription.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('Operateur', OperateurController::class);
    // Route::resource('products', ProductController::class);

    Route::get('/index', [SubscriptionsController::class, 'index'])->name('index');
    Route::get('/plans_abonnement', [SubscriptionsController::class, 'plans_abonnement'])->name('plans_abonnement');
    Route::post('/add_subscription', [SubscriptionsController::class, 'add_subscription'])->name('add_subscription');
    Route::get('/delete_sub/{id}', [SubscriptionsController::class, 'delete_sub'])->name('delete_sub');
    Route::get('/form_Update_sub/{id}', [SubscriptionsController::class, 'form_Update_sub'])->name('form_Update_sub');
    Route::post('/Update_subscription/{id}', [SubscriptionsController::class, 'Update_subscription'])->name('Update_subscription');

    Route::get('/chose_abonnement', [SubscriptionsController::class, 'chose_abonnement'])->name('chose_abonnement');
    Route::get('/buy_aboonement/{id}', [SubscriptionsController::class, 'buy_aboonement'])->name('buy_aboonement');

    Route::get('/menus', [MenuController::class, 'menus'])->name('menus');
    Route::post('/add_Menu', [MenuController::class, 'add_Menu'])->name('add_Menu');
    Route::get('/delete_menu/{id}', [MenuController::class, 'delete_menu'])->name('delete_menu');


    Route::get('/Restaurant', [RestaurantController::class, 'Restaurant'])->name('Restaurant');
    Route::post('/add_restaurant', [RestaurantController::class, 'add_restaurant'])->name('add_restaurant');
    Route::post('/update_restaurant/{id}', [RestaurantController::class, 'update_restaurant'])->name('update_restaurant');


    Route::get('/items', [ItemController::class, 'items'])->name('items');
    Route::post('/add_Item', [ItemController::class, 'add_Item'])->name('add_Item');
    Route::get('/delete_item/{id}', [ItemController::class, 'delete_item'])->name('delete_item');







});
Route::get('/afficher_menu/{id}', [QrcodeController::class, 'afficher_menu'])->name('afficher_menu');

require __DIR__.'/auth.php';
