<?php
use App\Http\Controllers\HomeController;
use App\Models\Product;
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

Route::get('users', [HomeController::class, 'index']);


// truyền dữ liệu từ đường dẫn a => đường dẫn b
Route::get('info',[HomeController::class, 'infoForm']);
Route::get('save-info',[HomeController::class, 'saveInfo'])->name('save.info');

Route::get('products', [HomeController::class, 'list_products'])->name('list.products');
Route::get('product/add',[HomeController::class, 'add_products'])->name('add.products');
Route::post('product/add', [HomeController::class, 'save_products']);

