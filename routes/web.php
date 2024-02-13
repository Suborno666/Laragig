<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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

Route::get('/listings/create',[ListingController::class,'create']);

// Store data from form
Route::post('/listings',[ListingController::class,'store']);

//Single Listing
Route::get('/listings/{listing}',[ListingController::class,'show']);