<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middidleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class, 'index']);

Route::get('/{listing}', [ListingController::class, 'show']);



// Route::get('/hello', function () {
//     return response("Hello World", 400)
//         ->header("Content-Type", "text/plain")
//         ->header("foo", "foo");
// });

// Route::get('/test/{id}', function ($id) {
//     dd($id);
//     return response("<h2>Your entered: $id</h2>");
// })->where('id', "[0-9]+");

// Route::get('/search', function (Request $request) {
//     return ($request->name);
// });
