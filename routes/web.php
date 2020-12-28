<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CustomerSide\Index AS CustomerIndex;
use App\Http\Livewire\CustomerSide\ServiceList;
use App\Http\Livewire\CustomerSide\ServiceDetail;
use App\Http\Livewire\CustomerSide\UserProfile;
use App\Http\Livewire\ProviderSide\Index AS ProviderIndex;
use App\Http\Livewire\AdminSide\Index AS AdminIndex;
use App\Http\Livewire\CategoryAdmin\Index AS CategoryAdminIndex;
use App\Http\Livewire\Auth\ProviderRegistration;
use App\Http\Livewire\AppliedProviderFeedback;
use Illuminate\Support\Facades\Http;


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

Route::get('/index', CustomerIndex::class)->name('home');

// Customer Side Here...
Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('services/{category}', ServiceList::class)->name('services');
    Route::get('requestservice/{reqservice}', ServiceDetail::class)->name('requestservice');
});


//Provider Page Route
Route::middleware(['auth', 'provider'])->group(function () {
    Route::get('/', ProviderIndex::class)->name("provider.dashboard");
});


// Admin Route Pages
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/', AdminIndex::class)->name("admin.dashboard");
});

// Category Admin Route Page
Route::middleware(['auth', 'category'])->group(function () {
    Route::get('/category', CategoryAdminIndex::class)->name("categoryAdmin.dashboard");
});


// Auth route
Route::middleware(['guest'])->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('apply_provider', ProviderRegistration::class)->name('provider.register');
    Route::get('feedback', AppliedProviderFeedback::class)->name('registrationFeedback');
});

Route::get('password/reset', Email::class)->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)->name('logout');
});
