<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/dashboard/index', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard.index');

Route::get('/forms', function () {
    return view('pages.forms.index');
});

Route::get('/buttons', function () {
    return view('pages.ui-features.buttons.index');
});

Route::get('/dropdowns', function () {
    return view('pages.ui-features.dropdowns.index');
});

Route::get('/typography', function () {
    return view('pages.ui-features.typography.index');
});

Route::get('/chart', function () {
    return view('pages.chart.index');
});

Route::get('/table', function () {
    return view('pages.table.index');
});

Route::get('/icons', function () {
    return view('pages.icons.index');
});

// Route::get('/login', function () {
//     return view('pages.user-pages.login.index');
// });

// Route::get('/register', function () {
//     return view('pages.user-pages.register.index');
// });

Route::get('/erro404', function () {
    return view('pages.error-pages.404.index');
});

Route::get('/erro500', function () {
    return view('pages.error-pages.500.index');
});
