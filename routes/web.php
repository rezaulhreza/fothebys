<?php

use App\Http\Livewire\FAQ;
use App\Http\Livewire\Home;
use App\Http\Livewire\Category;
use App\Http\Livewire\LotDetails;
use App\Http\Controllers\LotSpecific;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ApplyComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;

use App\Http\Controllers\AdminBidDetails;

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\AdminUserDetails;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminBookingDetails;

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminApplicationDetails;
use App\Http\Livewire\User\Account as UserAccount;
use App\Http\Livewire\Admin\Account as AdminAccount;
use App\Http\Livewire\User\Dashboard as UserDashboard;
use App\Http\Livewire\Admin\Dashboard as AdminDashboard;

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
Route::get('/home', Home::class)->name('home');
Route::get('/fothebys', Home::class);
Route::get('/about', AboutComponent::class);

Route::get('/search', Home::class,'search');
Route::get('/application', [ApplyController::class,'index'])->name('application.index');
Route::post('/application', [ApplyController::class,'store'])->name('application.store');

Route::get('/faqs', Faq::class)->name('faq.show');
Route::get('/lot/detail/{id}/{lot_ref}', [LotSpecific::class,'lotDetail'])->name('lot-specific-details');
Route::get('/categories',[CategoryController::class,'index'])->name('categories');

Route::post('/lot/{lot}/bids',[BidController::class,'store'])->name('lot.bids');

// Route::get('/booking',[BookingController::class,'thanks'])->name('thanks');
Route::get('newsletter',[NewsletterController::class, 'create']);
Route::post('newsletter',[NewsletterController::class, 'store'])->name('newsletter.store');


//user
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
    Route::get('/user/account', UserAccount::class)->name('user.account');
    Route::post('/lot/{lot}/bids',[BidController::class,'store'])->name('lot.bids');
    // Route::get('/booking', BookingComponent::class)->name('booking.reserve');
Route::get('/booking', [BookingController::class,'create'])->name('booking.create');
// Route::get('/bid/successful', [BidController::class,'create'])->name('bid.create');
Route::post('/booking', [BookingController::class,'store']);

});



//admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/account', AdminAccount::class)->name('admin.account');
    Route::resource('/admin/category', Category::class);
    Route::resource('/admin/faqs', FAQ::class);


    Route::resource('/admin/userDetails', AdminUserDetails::class);
    Route::resource('/admin/bookingDetails', AdminBookingDetails::class);
    Route::resource('/admin/bidDetails', AdminBidDetails::class);
    Route::resource('/admin/applicationDetails', AdminApplicationDetails::class);


    Route::resource('/admin/lots', LotDetails::class);
    Route::resource('/admin/booking', BookingController::class);
    Route::post('/admin/lots/image/update', [LotDetails::class, 'MultiImageUpdate'])->name('update-lot-image');
    Route::get('/changestatus', [LotDetails::class, 'changeStatus'])->name('change-lot-status');
    

});
