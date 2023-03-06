<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FitnessAdviceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialController;

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



// loads the login page and registration and post the users account when logging in or registering 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
//gets the log out function
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
//gets the dashboard when the user is logged in or types the root
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

// gets the social page  
Route::get('social', [SocialController::class, 'social'])->name('social');
//gets the post page for the social page when the user is logged in
Route::get('social-post', [SocialController::class, 'social_post_get'])->name('social.post');
//this post the data from the form and puts it into the controller and sends the user to the posts 
Route::post('social-post', [SocialController::class, 'social_post'])->name('social.post');
//gets the profile page when the user is logged in or types the root
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
//sends the request when the user updates their profile 
Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
//gets the healthy life style page when the user is logged in or types the root
Route::get('health', [FitnessAdviceController::class, 'index'])->name('health');


// Only authenticated users can access these routes: only for routes without controllers 
Route::middleware(['auth'])->group(function () {
  //loads the subscriptions page 
  Route::get('subscriptions', function () {
    return view('subscriptions');
  });
});
