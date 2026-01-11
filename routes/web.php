<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Cuser;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OffOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchesController;
use App\Http\Controllers\PurchesDetailsController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CheckoutController;
use App\Http\Controllers\Website\HomeController;
use App\Models\Material;

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

// .....................ADMIN start.................

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
route::get('/admin/search', [DashboardController::class, 'search'])->name('admin.search');

route::get('/csearch', [CustomerController::class, 'search']);
route::get('/psearch', [OffOrderController::class, 'psearch']);
route::get('/mtsearch', [PurchesController::class, 'mtsearch']);
route::get('/payment', [OffOrderController::class, 'payment'])->name('payment');
route::get('/paid/{id}', [OffOrderController::class, 'paid']);
Route::get("/getsubcat/{id}",[SubcategoryController::class, 'getSubcat']);

Route::resources([
    'category' => CategoryController::class,
    'subcategory' => SubcategoryController::class,
    'reservation' => ReservationController::class,
    'cuser' => Cuser::class,
    'menu' => MenuController::class,
    'off_order' => OffOrderController::class,
    'tab' => TabController::class,
    'order' => OrderController::class,
    'material' => MaterialController::class,
    'supplier' => SupplierController::class,
    'purches' => PurchesController::class,
    'purches_details' => PurchesDetailsController::class,
]);
// .....................ADMIN end.................

// .....................Website start.................

route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('wmenu', [HomeController::class, 'menu'])->name('wmenu');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/single/{id}', [HomeController::class, 'single'])->name('single');

// Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('/cartapi/{id}', [CartController::class, 'cartapi'])->name('cartapi');

Route::get('reserve', [CartController::class, 'reserve'])->name('reserve');

// Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
// Route::any('/checkout', [CheckoutController::class, 'index'])->name('checkout');




require __DIR__.'/auth.php';
