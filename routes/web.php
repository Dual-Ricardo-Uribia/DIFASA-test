<?php

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

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Ruta para mostrar el formulario de registro
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Ruta para manejar el registro de usuarios
Route::post('/register', [AuthController::class, 'register']);

// Ejemplo de ruta para el dashboard (ajusta según tu estructura de rutas y controladores)
Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->name('dashboard')->middleware('auth');

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Ruta para manejar el inicio de sesión
Route::post('/login', [AuthController::class, 'login']);

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas para CRUD de productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
