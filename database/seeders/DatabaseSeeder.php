<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AnimeList; // Import the AnimeList model so that we can use it
// to create new records in the database
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        AnimeList::create(
            [
                'title' => 'Frieren: Beyond Journey\'s End',
                'description' => "During their decade-long quest to defeat the Demon King, the members of the hero's party—Himmel
        himself, the priest Heiter, the dwarf warrior Eisen, and the elven mage Frieren—forge bonds through adventures and
        battles, creating unforgettable precious memories for most of them. However, the time that Frieren spends with her
        comrades is equivalent to merely a fraction of her life, which has lasted over a thousand years. When the party
        disbands after their victory, Frieren casually returns to her \"usual\" routine of collecting spells across the
        continent. Due to her different sense of time, she seemingly holds no strong feelings toward the experiences
        she went through. As the years pass, Frieren gradually realizes how her days in the hero's party truly impacted her.
        Witnessing the deaths of two of her former companions, Frieren begins to regret having taken their presence for granted;
        she vows to better understand humans and create real personal connections. Although the story of that once memorable
        journey has long ended, a new tale is about to begin.",
                'episodes' => 28,
                'genres' => 'Adventure, Drama, Fantasy',
                'start_aired_date' => '2023-09-29',
                'end_aired_date' => '2024-03-22',
                'broadcast' => 'Fridays at 23:00 (JST)',
                'studio' => 'Madhouse',
                'website' => 'https://frieren-anime.jp',
                'streaming_platforms' => 'Crunchyroll, Netflix, Aniplus TV, Bilibili Global, Muse Asia'
            ]
        );
    }
}
