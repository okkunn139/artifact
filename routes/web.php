<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/group_index', [GroupController::class, 'index'])->name('group_index');
Route::get('/group_index/{group}', [GroupController::class, 'show']);
Route::get('/mygroup', [GroupController::class, 'showMygroup'])->name('mygroup');
Route::get('/mygroup/create', [GroupController::class, 'create']);
Route::post('/mygroup', [GroupController::class, 'store']);
Route::get('/mygroup/edit', [GroupController::class, 'edit']);
Route::put('/mygroup', [GroupController::class, 'update']);
Route::get('/mygroup/delete', [GroupController::class, 'delete']);
Route::delete('/mygroup', [GroupController::class, 'destroy']);
