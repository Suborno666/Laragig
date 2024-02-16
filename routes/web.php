<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Common Resources Index:
//  index - Shows all Listing
//  show - Shows single Listing
//  create - Show form to create new Listing
//  store - Store new listing
//  edit - Show form to edit listing
//  update - update listing
//  destroy - Delete listing 
 

// All listing
Route::get('/',[ListingController::class,'index']);

// Show create form

Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');

//Manage Listings
Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth');

//Show Edit Form
Route::get('listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//Edit Submit to Update
Route::put('listings/{listing}',[ListingController::class,'update'])->middleware('auth');

//Delete Listing

Route::delete('listings/{listing}',[ListingController::class,'delete'])->middleware('auth');


// Store data from form
Route::post('/listings',[ListingController::class,'store'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}',[ListingController::class,'show']);

//Show Register/Create Form
Route::get('/register',[UserController::class,'create'])->middleware('guest');

//Create User
Route::post('/users',[UserController::class,'store']);

//Log User Out
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//Show Login Form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate',[UserController::class,'authenticate']);