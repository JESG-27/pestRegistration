<?php

use App\Http\Controllers\CropController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PestController;
use App\Http\Controllers\RecordController;
use App\Models\Record;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('record', RecordController::class);
Route::delete('crop-records/{crop}', [RecordController::class, 'deleteCropRecords'])->name('crop.deleteCropRecords');
Route::delete('pest-records/{pest}', [RecordController::class, 'deletePestRecords'])->name('pest.deletePestRecords');
Route::delete('location-records/{location}', [RecordController::class, 'deleteLocationRecords'])->name('location.deleteLocationRecords');
Route::get('download/{file}', [RecordController::class, 'downloadFile'])->name('record.downloadFile');
Route::resource('crop', CropController::class);
Route::resource('pest', PestController::class);
Route::resource('location', LocationController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
