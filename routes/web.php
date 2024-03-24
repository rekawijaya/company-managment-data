<?php

use App\Http\Controllers\employeeController;
use App\Http\Controllers\AplicationController;
use App\Http\Controllers\TableStockController;
use Illuminate\Support\Facades\Route;
use App\Models\employee;
use App\Models\Product;


Route::get('/', function () {
    return view('home', [
        "tittle" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "about"
    ]);
});

Route::get('/employee', [employeeController::class, 'show']);

Route::get('/aplication', [AplicationController::class, 'showAplication']);

Route::get('/tablestock', [TableStockController::class, 'showTable'])->name('table');

Route::get('/product/add/form', [TableStockController::class, 'addProductView'])->name('product.add.view');

Route::post('/product/add', [TableStockController::class, 'addProduct'])->name('product.add');

Route::get('/search', [TableStockController::class, 'search'])->name('product.search');


Route::get('/tablestock/edit/{id}', [TableStockController::class, 'edit'])->name('product.edit');

Route::put('/products/{product}', [TableStockController::class, 'update'])->name('product.update');

Route::delete('/tablestock/{product}', [TableStockController::class, 'delete'])->name('product.delete');
