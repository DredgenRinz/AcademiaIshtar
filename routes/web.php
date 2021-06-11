<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkeletonController;
use App\Http\Controllers\LoreItemController;

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

Route::resource('LoreItem',LoreItemController::class);
Route::resource('Admins',App\Http\Controllers\AdminController::class);
Route::resource('Inventario',App\Http\Controllers\InventoryController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/Home', function () {
    return Inertia\Inertia::render('home');
})->name('Home');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/myself', [SkeletonController::class, 'myself'])
    ->name('skeleton.myself');

Route::middleware(['auth:sanctum', 'verified'])->get('/TrackedItems', function () {
    return Inertia\Inertia::render('buscador');
})->name('items.buscador');

Route::get('/ItemsList', function () {
    return Inertia\Inertia::render('ListaItems');
})->name('items.lista');

Route::middleware(['auth:sanctum', 'verified'])->get('/AdminGameItems', function () {
    return Inertia\Inertia::render('AdminItem');
})->name('items.AdminItem');
