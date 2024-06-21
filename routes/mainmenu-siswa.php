<?php

use App\Http\Controllers\GuruMapelController;
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
});
 */


/* Route::fallback([TemplateController::class, 'error_pages']); */

Route::get('/gurumapel_profil', [GuruMapelController::class, 'gurumapel_profil'])->name('gurumapel_profil');
