<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Using this Eloquent model, we can interact with the anime_list table in the database
class AnimeList extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'anime_list'; // specify the table name or else the php artisan migrate:refresh --seed will not work

    public function scopeFilter($query, array $filters) { // The name of this function should not be renamed. It is a Laravel convention to name it scopeFilter
        // please see the AnimeListController for the usage of this function (AnimeList::latest()->filter(request(['genre']))->get()))
        if ($filters['genre'] ?? false) { // If the genre filter exists
            $query->where('genres', 'like', '%' .request('genre') . '%');
            /* Example:
             * SELECT * FROM anime_list WHERE genres like '%Action%';
             */
        }
    }
}
