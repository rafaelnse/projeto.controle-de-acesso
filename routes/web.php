<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\UserController;




Route::resource('users', UserController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index')->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('admin/user/registro', [LoginController::class, 'create'])->name('login.create');


Route::get('admin/visitantes', [VisitanteController::class, 'index'])->name('admin.visitantes')->middleware('auth');

Route::get('admin/cadastro/visitante', [VisitanteController::class, 'create'])->name('admin.visitante.form')->middleware('auth');
Route::post('admin/cadastro/visitante', [VisitanteController::class, 'store'])->name('admin.visitante.store')->middleware('auth');
Route::get('/visitante/{id}', [VisitanteController::class, 'detalhes'])->name('visitante.detalhes')->middleware('auth');


Route::get('admin/visitante/{id}/edit', [VisitanteController::class, 'edit'])->name('admin.visitante.edit');
Route::patch('admin/visitante/{id}', [VisitanteController::class, 'update'])->name('admin.visitante.update');
Route::delete('admin/visitante/{id}', [VisitanteController::class, 'destroy'])->name('admin.visitante.destroy');

Route::get('admin/busca', [VisitanteController::class, 'index'])->name('admin.visitante.show')->middleware('auth');


Route::get('admin/acesso/add/{visitante}', [AcessoController::class, 'create'])->name('admin.acesso.form')->middleware('auth');
Route::post('admin/acesso/add/', [AcessoController::class, 'store'])->name('admin.acesso.store')->middleware('auth');


//Route::get('/visitante/{slug}', [AcessoController::class, 'show'])->name('acesso.detalhes')->middleware('auth');




