<?php

use App\Http\Controllers\AnimeListController;
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

// Home page http://127.0.0.1:8000/
// Retrieves all the anime postings from the AnimeList model and passes them to the view
//Route::get('/', [AnimeListController::class, 'index'], function () {
//    return view('animeList',
//        [
//        'heading' => 'List of Latest AnimeList',
//        'animeList' => AnimeList::all()
//        ]);
//});
// Use a controller instead of the closure function or callback function as shown above
Route::get('/', [AnimeListController::class, 'index']);


// Show create form
// Have to declared first before the show method because it will be treated as a parameter
Route::get('/anime/create', [AnimeListController::class, 'create']);

// Retrieves a specific anime posting from the AnimeList model and passes it to the view
// http://127.0.0.1:8000/anime/1 (will retrieve the anime with id 1, which is Frieren: Beyond's Journey's End)
//Route::get('/anime/{animeEntry}', function (AnimeList $animeEntry) {
//    // Use Implicit Route Model Binding to retrieve the anime with the id specified in the URL
//    return view('anime',
//        [
//        'anime' => $animeEntry
//        ]);
//});
// Use a controller instead of Implicit Route Model Binding as shown above
Route::get('/anime/{animeElement}', [AnimeListController::class, 'show']);
// for the anime/{animeElement} check the controller. If the name is different, it will not work
// because animeElement is an object of the AnimeList model

// Store anime data
Route::post('/anime', [AnimeListController::class, 'store']);

