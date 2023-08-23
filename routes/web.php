<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ProfileController,
    RoleAndPermissionController
};

Route::get('/register', fn () => view('auth.register'))->name('register');
Route::post('/register', [UserController::class, 'userRegister'])->name('register.store');
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/', fn () => view('dashboard'));
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::get('/investment', fn () => view('investment'))->name('investment');
    Route::get('/team', fn () => view('team'))->name('team');
    Route::get('/detail', fn () => view('detail'))->name('detail');


    Route::get('/profile', ProfileController::class)->name('profile');

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleAndPermissionController::class);
});

Route::middleware(['auth', 'permission:test view'])->get('/tests', function () {
    dd('This is just a test and an example for permission and sidebar menu. You can remove this line on web.php, config/permission.php and config/generator.php');
})->name('tests.index');
