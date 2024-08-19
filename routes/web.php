<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NormalUserRegisterController;
use App\Http\Controllers\Auth\NormalUserLoginController;

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
    if (Auth::guard('applicant')->check()) {
        return redirect()->route('applicant.index'); // Replace with your applicant's dashboard or desired view route
    }
    return view('welcome');
});
// Route::get('login/show', [NormalUserLoginController::class, 'show'])->name('login');
// Route::post('login1', [NormalUserLoginController::class, 'login'])->name('login.check');

// Route::get('normal-user/register', [NormalUserRegisterController::class, 'create'])->name('normal-user.register');

// Route::post('normal-user/register', [NormalUserRegisterController::class, 'store']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/applicant.php';
// require __DIR__ . '/auth.php';
