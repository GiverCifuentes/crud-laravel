<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('empresa', 'ControladorEmpresa@Index'
)->name('empresa.index');

Route::get('empresa/crear', 'ControladorEmpresa@create'
)->name('empresa.create');

Route::post('empresa', 'ControladorEmpresa@store'
)->name('empresa.store');

Route::get('empresa/{empre}/editar', 'ControladorEmpresa@edit'
)->name('empresa.edit');

Route::match(['put', 'patch'],'empresa/{empre}/editar', 'ControladorEmpresa@update'
)->name('empresa.update');

Route::delete('empresa/{empre}', 'ControladorEmpresa@delete')->name('empresa.delete');
