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

        AnimeList::create(
            [
                'title' => 'The Apothecary Diaries',
                'description' => "Maomao, an apothecary's daughter, has been plucked from her peaceful life and sold to
                the lowest echelons of the imperial court. Now merely a maid, Maomao settles into her new mundane life
                and hides her extensive knowledge of medicine in order to avoid any unwanted attention.

                Not long after Maomao's arrival, the emperor's infant children inexplicably begin to experience grave
                symptoms—almost as if a curse has been cast. The curious Maomao easily solves the mystery and, to remain
                out of the limelight, attempts to leave an anonymous tip. Unfortunately, the dashing and perceptive eunuch
                Jinshi sees through it and manages to single her out.

                In recognition of her talent, Maomao is promoted to lady-in-waiting for the emperor's favorite concubine,
                Gyokuyou. As Maomao continues to remedy the numerous ailments afflicting the imperial court, her pharmaceutical
                expertise quickly proves indispensable.
                ",
                'episodes' => 24,
                'genres' => 'Drama, Mystery',
                'start_aired_date' => '2023-10-22',
                'end_aired_date' => '2024-03-24',
                'broadcast' => 'Sundays at 01:05 (JST)',
                'studio' => 'OLM',
                'website' => 'https://kusuriyanohitorigoto.jp/',
                'streaming_platforms' => 'Crunchyroll, Netflix'
            ]
        );

        AnimeList::create(
            [
                'title' => '7th Time Loop: The Villainess Enjoys a Carefree Life Married to Her Worst Enemy!',
                'description' => "Rishe Irmgard Weitzner finds herself in a familiar situation: her fiancé is publicly
                breaking off their engagement, and her ducal family is about to disown her in shame. However, Rishe is
                not distraught; she has already had six chances to rebuild her life and chase a different passion each
                time. But she would always get swept up in a war and die, so now she wishes for her seventh reincarnation
                to be easygoing and uneventful.

                What Rishe does not take into account is the presence of Arnold Hein, the crown prince of the Galkhein Kingdom.
                He is destined to usurp the throne and become a tyrant who starts a large-scale invasion of neighboring countries.
                To make their encounter worse, Arnold is the one who killed Rishe in her previous life. That is why it is all the more
                shocking when he proposes to Rishe on the spot. In pursuit of her desired life, Rishe must consider accepting Arnold's proposal
                and discover the reasons behind his brutal actions to stop the war from ever happening.",
                'episodes' => 12,
                'genres' => 'Fantasy, Romance',
                'start_aired_date' => '2024-01-07',
                'end_aired_date' => '2024-03-24',
                'broadcast' => 'Sundays at 23:30 (JST)',
                'studio' => 'Studio Kai',
                'website' => 'https://7th-time-loop.com/',
                'streaming_platforms' => 'Crunchyroll, Muse Asia'
                ]
        );
    }
}
