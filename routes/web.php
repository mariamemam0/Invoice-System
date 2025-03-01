<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceAttachmentController;
use App\Http\Controllers\InvoiceDetailController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionsController;
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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('invoices',InvoicesController::class);
Route::resource('sections',SectionsController::class);
Route::resource('products',ProductController::class);
Route::get('/section/{id}',[InvoicesController::class,'getProducts']);

Route::get('/InvoicesDetails/{id}',[InvoiceDetailController::class,'edit']);
Route::get('View_file/{invoice_number}/{file_name}',[InvoiceDetailController::class,'open_file']);
Route::get('download/{invoice_number}/{file_name}',[InvoiceDetailController::class,'get_file']);
Route::post('delete_file',[InvoiceDetailController::class,'destroy'])->name('delete_file');
Route::resource('InvoiceAttachments',InvoiceAttachmentController::class);


Route::get('/{page}', [AdminController::class,'index']);


