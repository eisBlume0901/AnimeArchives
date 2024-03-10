<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AnimeList; // Importing the AnimeList class from the Models folder
use Illuminate\Http\Request;

class AnimeListController extends Controller
{
    /*
     * The purpose of the controller is to retrieve the data from the model and pass it to the view
     * The index() method retrieves all the anime postings from the AnimeList model and passes them to the view
     * The show() method retrieves a specific anime posting from the AnimeList model and passes it to the view
     */

    // Show all anime lists
    public function index() {
        return view('animeList/index', // animeList.blade.php changed to index.blade.php (animeList/index or animeList/index is accepted)
            [
                'heading' => 'List of Latest AnimeList',
                'animeList' => AnimeList::all()
            ]);
    }

    // Show a specific anime
    public function show(AnimeList $animeElement) {
        return view('animeList.show', // anime.blade.php changed to show.blade.php (animeList/show or animeList.show) is accepted)
            [
                'anime' => $animeElement
            ]);
    }
}
