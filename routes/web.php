<?php

use Illuminate\Http\Request; // For request object
use Illuminate\Support\Facades\Route;
use App\Models\Anime; // Importing the Anime class from the Models folder

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


// Retrieves a specific anime posting from the Anime model and passes it to the view
// http://
Route::get('/anime/{id}', function ($id) {
    return view('anime',
        [
            'anime' => Anime::find($id)
        ]);
});

// Home page http://127.0.0.1:8000/
// Retrieves all the anime postings from the Anime model and passes them to the view
Route::get('/', function () {
    return view('animeLists',
        [
        'heading' => 'List of Latest Anime',
        'animeLists' => Anime::all()
        ]);
});
