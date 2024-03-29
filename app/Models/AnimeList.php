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
    protected $fillable = ['title', 'description', 'episodes', 'genres', 'start_aired_date', 'end_aired_date', 'broadcast', 'studio', 'website', 'streaming_platforms'];
    // The fillable property specifies which attributes should be mass-assignable.

    public function scopeFilter($query, array $filters) { // The name of this function should not be renamed. It is a Laravel convention to name it scopeFilter
        // please see the AnimeListController for the usage of this function (AnimeList::latest()->filter(request(['genre']))->get()))
        if ($filters['genre'] ?? false) { // If the genre filter exists
            $query->where('genres', 'like', '%' .request('genre') . '%');
            /* Example:
             * SELECT * FROM anime_list WHERE genres like '%Adventure%';
             */
        }

        if ($filters['search'] ?? false) { // If the search filter exists
            $query->where('title', 'like', '%' .request('search') . '%')
                ->orWhere('description', 'like', '%' .request('search') . '%');
            /* Example:
             * SELECT * FROM anime_list WHERE title like '%Frieren%' or description like '%Elf%';
             */
        }
    }


}
