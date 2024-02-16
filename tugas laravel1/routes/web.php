<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get("/biodata", [BiodataController::class, 'index'])->name('biodata.index');
// Munculin Form Edit
Route::get("/biodata/{id}", [BiodataController::class, 'show'])->name('biodata.show');
//Buat Update
Route::put("/biodata/{id}", [BiodataController::class, 'update'])->name('biodata.update');
// Buat Delete
Route::delete("/biodata/{id}", [BiodataController::class, 'destroy'])->name('biodata.destroy');