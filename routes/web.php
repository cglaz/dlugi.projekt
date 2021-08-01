<?php

declare(strict_types=1);

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

Route::get('/',['middleware' => 'guest', function () {
    return view('auth.login');
}]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::group([
    'prefix' => 'debts',
    'namespace' => 'Debts',
    'as' => 'debts.',
], function() {
    Route::get('list', [App\Http\Controllers\DebtController::class, 'list'])
        ->name('list');

    Route::delete('delete/{debtId}', [App\Http\Controllers\DebtController::class, 'delete'])
        ->name('delete');

    Route::get('create', [App\Http\Controllers\DebtController::class, 'create'])
        ->name('create');

    Route::post('store', [App\Http\Controllers\DebtController::class, 'store'])
        ->name('store');
});
