<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Models\Cliente;
use App\Http\Livewire\Clientes;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/listado",[ProductosController::class,"listado"]);


Route::resource('Cliente', ClientesController::class);

Route::get("/idioma/{pais?}",function ($pais="es"){
    Session::put('locale', $pais);
    return redirect()->back();
});


Route::view("/qr","qr");

Route::get("/componente",Clientes::class);


Route::get("imprimir",function(){

    $clientes=Cliente::all();


    $pdf = PDF::loadView('factura',compact("clientes"))->setPaper('a4', 'landscape');

    return $pdf->download('invoice.pdf');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
