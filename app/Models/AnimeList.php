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
}
