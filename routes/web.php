<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserPagesController;

use App\Http\Controllers\RegistrationController;
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

Route::get('/toc', function () {
    return view('toc');
});

Route::get('/login', function () {
    return view('login');
});

Route::controller(RegistrationController::class)->group(function(){
    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');
    
    Route::get('logout', 'logout')->name('logout');
    
    Route::post('sendtoken', 'sendtoken')->name('registration.sendtoken');
    
    Route::post('validate_registration', 'validate_registration')->name('registration.validate_registration');
    
    // Route::get('dashboard', 'dashboard')->name('dashboard');

    Route::post('validate_login', 'validate_login')->name('registration.validate_login');

});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


// USER ROUTE
Route::middleware('guest')->prefix('user')->group(function () {

    //Register
    // Route::get('/auth/register', [RegisteredUserController::class, 'create']);
    // Route::post('/auth/register', [RegisteredUserController::class, 'store'])->name('register');

    //Login
    // Route::get('/auth/login', [AuthenticatedSessionController::class, 'create'])
    // ->name('login');
    // Route::post('/auth/login', [AuthenticatedSessionController::class, 'store'])->name('loginStore');

    // Password
    // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    // ->name('password.request');

    // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    //     ->name('password.email');

    // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    //     ->name('password.reset');

    // Route::post('reset-password', [NewPasswordController::class, 'store'])
    //     ->name('password.update');

});

Route::middleware('auth')->prefix('user')->group(function(){

    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');

});

Route::middleware('auth','verified')->prefix('user')->group(function(){

    // AUTH

    Route::post('/order', [OrderController::class, 'store'])->name('postOrder');
    Route::patch('/order/cancel/{id}', [OrderController::class, 'cancel'])->name('cancelOrder');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


    // MAIN APP
    Route::get('/about', [UserPagesController::class, 'about'])->name('about');
    Route::get('/contact', [UserPagesController::class, 'contact'])->name('contact');
    Route::get('/help', [UserPagesController::class, 'help'])->name('help');
    Route::get('/profile', [UserPagesController::class, 'profile'])->name('profile');
    Route::get('/password', [UserPagesController::class, 'password'])->name('changePassword');
    Route::get('/order', [UserPagesController::class, 'orders'])->name('order');

    Route::post('/user/contact', [ContactController::class, 'contactPost'])->name('contactPost');

});

Route::get('/auth/profile', [AuthController::class, 'profile']);

Route::put('/auth/profile/update', [AuthController::class, 'profileUpdate'])->name('profileUpdate');
// Route::post('/auth/profile/image', [AuthController::class, 'ProfileImage'])->name('userProfileImage');