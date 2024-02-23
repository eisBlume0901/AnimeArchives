<?php

use Illuminate\Http\Request; // For request object
use Illuminate\Support\Facades\Route;
use App\Models\AnimeList; // Importing the AnimeList class from the Models folder

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


// Retrieves a specific anime posting from the AnimeList model and passes it to the view
// http://127.0.0.1:8000/anime/1 (will retrieve the anime with id 1, which is Frieren: Beyond's Journey's End)
Route::get('/anime/{id}', function ($id) {
    return view('anime',
        [
            'anime' => AnimeList::find($id) // Retrieved from the AnimeList Model
        ]);
})->where('id', '[0-9]+'); // This is a regular expression that ensures that the id is a number

// Home page http://127.0.0.1:8000/
// Retrieves all the anime postings from the AnimeList model and passes them to the view
Route::get('/', function () {
    return view('animeList',
        [
        'heading' => 'List of Latest AnimeList',
        'animeList' => AnimeList::all()
        ]);
});
