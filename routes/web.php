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
// // Route::get('/lot/details/', LotDetails::class)->name('lot.details');
// Route::get('/lots/{lot_ref}', LotDetails::class)->name('lot.details');
// Route::get('/product/detail/{id}/{slug}', [FrontendPageController::class,'productDeatil'];
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
  
    Route::get('/admin/products', [ProductController::class,'index'])->name('products.index');
    Route::get('/admin/products/create-step-one', [ProductController::class,'createStepOne'])->name('products.create.step.one');
    Route::post('/admin/products/create-step-one', [ProductController::class,'postCreateStepOne'])->name('products.create.step.one.post');
    Route::resource('/admin/lots', LotDetails::class);

    Route::get('/admin/products/create-step-two', [ProductController::class,'createStepTwo'])->name('products.create.step.two');
    Route::post('/admin/products/create-step-two', [ProductController::class,'postCreateStepTwo'])->name('products.create.step.two.post');

    Route::get('/admin/products/create-step-three', [ProductController::class,'createStepThree'])->name('products.create.step.three');
    Route::post('/admin/products/create-step-three', [ProductController::class,'postCreateStepThree'])->name('products.create.step.three.post');

   

    // Route::get('/admin/lots/create-step-two', [LotDetails::class,'createStepTwo'])->name('lots.create.step.two');
    // Route::post('/admin/lots/create-step-two', [LotDetails::class,'postCreateStepTwo'])->name('lots.create.step.two.post');

    // Route::get('/admin/lots/create-step-three', [LotDetails::class,'createStepThree'])->name('lots.create.step.three');
    // Route::post('/admin/lots/create-step-three', [LotDetails::class,'postCreateStepThree'])->name('lots.create.step.three.post');
});
