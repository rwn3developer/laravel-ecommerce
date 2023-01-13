<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/',function(){
    return view('adminmaster');
});

//category functionality start
Route::get('admin/category',[CategoryController::class,'index']);
Route::get('admin/category/manage_category',[CategoryController::class,'manageCategory'])->name('category.manage_category');
Route::post('admin/category/add',[CategoryController::class,'add'])->name('category.add');
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);
Route::post('admin/category/update',[CategoryController::class,'update'])->name('category.update');
Route::get('/admin/category/active/{id}',[CategoryController::class,'active']);
Route::get('/admin/category/deactive/{id}',[CategoryController::class,'deactive']);


//category functionality end
