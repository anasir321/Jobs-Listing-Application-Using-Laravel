<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function(){
//     return response("Hello!");
// });

// Route::get('/posts/{id}', function($id){
//     dd($id);
// });

// All Listings
Route::get('/', [ListingController::class, 'index']);

// create a listing using form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store a listing
Route::post('/listings', [ListingController::class, 'store']);

// Single Listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// custom method to search for a listing
// Route::get('/searchDb', [ListingController::class, 'searchDb']);
