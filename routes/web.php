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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

//->middleware("auth");

//CRUD Sucursales
Route::get('/admin/branch', [App\Http\Controllers\BranchController::class, 'index'])->name('branch.index');
Route::get('/admin/branch/create',[App\Http\Controllers\BranchController::class,'create'])->name('branch.create');
Route::post('/admin/branch',[App\Http\Controllers\BranchController::class,'store'])->name('branch.store');
Route::get('admin/branch/{id}',[App\Http\Controllers\BranchController::class,'show'])->name('branch.show');
Route::get('/admin/branch/{id}/edit',[App\Http\Controllers\BranchController::class,'edit'])->name('branch.edit');
Route::put('/admin/branch/{id}',[App\Http\Controllers\BranchController::class,'update'])->name('branch.update');
Route::delete('/admin/branch/{id}',[App\Http\Controllers\BranchController::class,'destroy'])->name('branch.destroy');

//CRD Roles
Route::get('/admin/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role.index');
Route::post('/admin/role', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
Route::delete('admin/role/{id}',[App\Http\Controllers\RoleController::class,'destroy'])->name('role.destroy');

//CRUD Usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('usuarios.destroy');

//CRD Categorias
Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::post('/admin/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::delete('admin/category/{id}',[App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destroy');

//CRD Impuestos
Route::get('/admin/tax', [App\Http\Controllers\TaxController::class, 'index'])->name('tax.index');
Route::post('/admin/tax', [App\Http\Controllers\TaxController::class, 'store'])->name('tax.store');
Route::delete('admin/tax/{id}',[App\Http\Controllers\TaxController::class,'destroy'])->name('tax.destroy');

//CRUD Usuarios
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/admin/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/admin/product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/admin/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::delete('/admin/product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

