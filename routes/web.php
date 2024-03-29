<?php

use App\Http\Controllers\Admin\ClasseController;
use App\Http\Controllers\Admin\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\MemberController;
use App\Http\Controllers\Guest\FamilyController;

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
})->name('home');

Route::controller(MemberController::class)->group(function () {
    Route::get('member/register', 'create')->name('member.register');
    Route::get('register/find', 'find')->name('register.find');
    Route::get('member/{member}/continue', 'continue')->name('register.continue');
});

Route::controller(FamilyController::class)->group(function () {
    Route::get('family/register', 'create')->name('family.register');
});

Route::middleware(['auth:sanctum', 'verified'])->controller(WelcomeController::class)->group(function () {
    Route::get('/dashboard', 'welcome')->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->controller(ClasseController::class)->group(function () {
    Route::get('details/{classe:slug}', 'details')->name('classe.details');
});
