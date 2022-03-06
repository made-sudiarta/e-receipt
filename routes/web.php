<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\SettingController;

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
//PAYMENT METHOD
Route::get('/method', [MethodController::class, 'index'])->name('method');
Route::get('/method-create', [MethodController::class, 'create'])->name(
    'method-create'
);
Route::get('/method-edit/{id}', [MethodController::class, 'edit'])->name(
    'method-edit'
);
Route::post('/method', [MethodController::class, 'store'])->name('method-save');
Route::patch('method-update/{id}', [MethodController::class, 'update'])->name(
    'method-update'
);
Route::delete('method-destroy/{id}', [
    MethodController::class,
    'destroy',
])->name('method-destroy');
//END PAYMENT METHOD

//SETTING
Route::get('setting', [SettingController::class, 'index'])->name('setting');
Route::get('setting-create', [SettingController::class, 'create'])->name(
    'setting-create'
);
Route::post('setting', [SettingController::class, 'store'])->name(
    'setting-save'
);

//END SETTING

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
