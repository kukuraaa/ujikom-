<?php

use App\Http\Controllers\AuthController;
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
    return redirect()->route('login');
});

//register
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister'])->name('postregister');

//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');

//logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//admin dan user
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::get('/menu', [AuthController::class, 'menu'])->name('menu');

//tmabah menu
Route::get('/tambah', [AuthController::class, 'tambah'])->name('tambah');
Route::post('/posttambah', [AuthController::class, 'posttambah'])->name('posttambah');

//Hapus
Route::get('/hapus/{produk}', [AuthController::class, 'hapus'])->name('hapus');

//edit 
Route::get('/edit/{produk}', [AuthController::class, 'edit'])->name('edit');
Route::post('/postedit/{produk}', [AuthController::class, 'postedit'])->name('postedit');

//keranjang
Route::get('/keranjang', [AuthController::class, 'keranjang'])->name('keranjang');
Route::post('/postkeranjang/{produk}', [AuthController::class, 'postkeranjang'])->name('postkeranjang');

//detail
Route::get('/detail/{produk}', [AuthController::class, 'detail'])->name('detail');