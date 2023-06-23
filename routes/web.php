<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

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
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('welcome', [HomeController::class, 'back'])->name('welcome');
Route::get('profile', ProfileController::class)->name('profile');
// Route::get('employees', EmployeeController::class)->name('employees');
Route::resource('employees', EmployeeController::class);
