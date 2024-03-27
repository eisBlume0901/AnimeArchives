<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AnimeList; // Importing the AnimeList class from the Models folder
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AnimeListController extends Controller
{
    /*
     * The purpose of the controller is to retrieve the data from the model and pass it to the view
     * The index() method retrieves all the anime postings from the AnimeList model and passes them to the view
     * The show() method retrieves a specific anime posting from the AnimeList model and passes it to the view
     */

    // Show all anime lists
    /*
     * Retrieving request in two methods
     * 1. Dependency Injection (Request $request) - This is the recommended way to retrieve the request object in Laravel controller methods
     * public function index(Request $request)) {
     *    dd($request);
     * }
     * 2. Request helper function (request()) - This is the global helper function that can be used to retrieve the request object in Laravel controller methods
     * public function index() {
     *   dd(request());
     * }
     */
    public function index() {
//        dd(request('genre')); // Retrieve the genre query parameter from the URL, dd is for debugging purposes

        return view('animeList/index', // animeList.blade.php changed to index.blade.php (animeList/index or animeList/index is accepted)
            [
                'heading' => 'List of Latest AnimeList',
                'animeList' => AnimeList::latest()->filter(request(['genre', 'search']))->get()// The request uses genre which is singular because we for loop each genre in the anime_genres.blade.php
            ]);

        /*
        AnimeList::all() vs AnimeList::latest()->get()
        AnimeList::all() - This retrieves all the anime postings from the anime_list table in the database
        AnimeList::latest()->get() - This retrieves all the anime postings from the anime_list table in the database and sorts them by the latest created_at date
        */
    }

    // Show a specific anime
    public function show(AnimeList $animeElement) {
        return view('animeList.show', // anime.blade.php changed to show.blade.php (animeList/show or animeList.show) is accepted)
            [
                'anime' => $animeElement
            ]);
    }

    // Show create form
    public function create() {
        return view('animeList/create'); // Refer to the directory of views folder not the route one
    }

    // Store anime data
    public function store(Request $request) { // dependency injection
//        dd($request->all()); // dd is for debugging purposes
        $formFields = $request->validate([
            'title' => 'required',
            'description' => ['required', Rule::unique('anime_list', 'description')],
            'episodes' => ['required', 'integer', 'min:1'],
            'genres' => 'required',
            'start_aired_date' => 'required',
            'end_aired_date' => 'required',
            'broadcast' => 'required',
            'studio' => 'required',
            'website' => ['required', 'url'],
            'streaming_platforms' => 'required'
        ]);

        AnimeList::create($formFields); // Store the anime data in the database (anime_list table

        return redirect('/'); // Redirect to the home page after storing the anime data
    }
}
