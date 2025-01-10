<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\BatikController;
use App\Http\Middleware\RedirectMiddleware;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminListController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListProdukUserController;

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
    return view('landingpage');
});
Route::get('/listproduk', function () {
    return view('homepage');
});
Route::get('/home', function () {
    return view('admin.kategori.index');
});
Route::get('/kain', function () {
    return view('admin_kain');
})->name('kain');
Route::get('/batik', function () {
    return view('admin_batik');
});
Route::get('/transaksi', function () {
    return view('admin_transaksi');
});
Route::get('/test', function () {
    return view('testview');
});
Route::get('/testadmin', function () {
    return view('testadmin');
});


Route::controller(BatikController::class)->prefix('batik')->group(function (){
    Route::get('/','index')->name('batik.index');
    Route::get('create','create')->name('batik.create');
    Route::post('store','store')->name('batik.store');
    Route::get('edit/{id}','edit')->name('batik.edit');
    Route::put('update/{id}','update')->name('batik.update');
    Route::delete('destroy/{id}','destroy')->name('batik.destroy');
});

Route::controller(BahanController::class)->prefix('bahan')->group(function (){
    Route::get('/','index')->name('bahan.index');
    Route::get('create','create')->name('bahan.create');
    Route::post('store','store')->name('bahan.store');
    Route::get('edit/{id}','edit')->name('bahan.edit');
    Route::put('update/{id}','update')->name('bahan.update');
    Route::delete('destroy/{id}','destroy')->name('bahan.destroy');
});
Route::controller(ListProdukUserController::class)->prefix('produk')->group(function () {
    Route::get('/', 'index')->name('produk');
});

Route::controller(HomepageController::class)->prefix('homepage')->group(function () {
    Route::get('/', 'index')->name('homepage');
});

Route::controller(DashboardController::class)->prefix('dashboard')->group(function () {
    Route::get('/', 'index')->name('dashboard');
});

Route::controller(AdminListController::class)->prefix('adminlist')->group(function () {
    Route::get('/', 'index')->name('adminlist');
    Route::patch('approve/{id}', 'update')->name('adminlist.approve');
    Route::delete('destroy/{id}', 'destroy')->name('adminlist.destroy');
});

// ADMIN
Route::middleware([RedirectMiddleware::class])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::post('/postregister', 'postRegister')->name('postregister');
        Route::post('/postlogin', 'postLogin')->name('postlogin');
        Route::get('/logout', 'logout')->name('logout');
    });
});
