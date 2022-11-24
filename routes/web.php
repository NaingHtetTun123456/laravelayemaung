<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\layoutController;
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
Route::get('/brand',[layoutController::class,'Brand'])->name('brand');
Route::get('/category',[layoutController::class,'Category'])->name('category');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/',[AdminController::class,'dashboard'])->name('admin');
    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product',ProductController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/customer/login', [App\Http\Controllers\layoutController::class, 'customerlogin'])->name('customer-login');
Route::get('/auth',[App\Http\Controllers\HomeController::class, 'auth'])->name('auth');
Route::get('/customer/register',[CustomerController::class, 'registerView'])->name('register-view');

Route::post('/customer/register',[CustomerController::class, 'register'])->name('register-submit');