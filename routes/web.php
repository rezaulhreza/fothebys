<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\LotSpecific;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Admin\Account as AdminAccount;
use App\Http\Livewire\Admin\Dashboard as AdminDashboard;
use App\Http\Livewire\Category;
use App\Http\Livewire\FAQ;
use App\Http\Livewire\Home;
use App\Http\Livewire\LotDetails;
use App\Http\Livewire\User\Account as UserAccount;
use App\Http\Livewire\User\Dashboard as UserDashboard;

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

Route::get('/', Home::class);
Route::get('/home', Home::class);
Route::get('/fothebys', Home::class);

Route::get('/faqs', Faq::class)->name('faq.show');
Route::get('/lot/detail/{id}/{lot_ref}', [LotSpecific::class,'lotDetail'])->name('lot-specific-details');
Route::get('/categories',[CategoryController::class,'index'])->name('categories');



//user
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
    Route::get('/user/account', UserAccount::class)->name('user.account');
});



//admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/account', AdminAccount::class)->name('admin.account');
    Route::resource('/admin/category', Category::class);
    Route::resource('/admin/faqs', FAQ::class);
    Route::resource('/admin/lots', LotDetails::class);
    Route::post('/admin/lots/image/update', [LotDetails::class, 'MultiImageUpdate'])->name('update-lot-image');
    Route::get('/changestatus', [ProductController::class, 'changeStatus'])->name('change-lot-status');

});
