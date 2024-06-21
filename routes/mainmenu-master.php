<?php

use App\Http\Controllers\MasterController;
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

Route::get('/master_profil', [MasterController::class, 'master_profil'])->name('master_profil');

// Tools
Route::get('/tools_opsi_aplikasi', [MasterController::class, 'tools_opsi_aplikasi'])->name('tools_opsi_aplikasi');
Route::get('/tools_impor_data_master', [MasterController::class, 'tools_impor_data_master'])->name('tools_impor_data_master');
Route::get('/tools_ekspor_data_master', [MasterController::class, 'tools_ekspor_data_master'])->name('tools_ekspor_data_master');
Route::get('/tools_backup_database', [MasterController::class, 'tools_backup_database'])->name('tools_backup_database');
Route::get('/tools_data_login', [MasterController::class, 'tools_data_login'])->name('tools_data_login');
