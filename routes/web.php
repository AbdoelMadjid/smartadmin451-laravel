<?php

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\temp\TemplateController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::fallback([ErrorController::class, 'index']);

Route::get('/', [TemplateController::class, 'index'])->name('dashboard');

require __DIR__ . '/web-template.php';
