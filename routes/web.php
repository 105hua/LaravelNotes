<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, "index"]);
Route::get("/login", [LoginController::class, "showForm"])->name("login");
Route::post("/login", [LoginController::class, "submitForm"]);
Route::get("/notes", [NotesController::class, "index"])->name("notes");