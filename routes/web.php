<?php

use App\Http\Controllers\CenterItemController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\KoltsegekController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/register', function () {
//     return view('auth.login');
// });

Route::prefix('worker')->controller(WorkerController::class)->middleware('auth')->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::prefix('centerItem')->controller(CenterItemController::class)->middleware('auth')->group(function () {
    Route::get('/allCenterItems', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::prefix('shops')->controller(ShopsController::class)->middleware('auth')->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});




Route::prefix('koltsegek')->controller(KoltsegekController::class)->middleware('auth')->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::prefix('expenditures')->controller(ExpenditureController::class)->middleware('auth')->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::prefix('users')->controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
});
