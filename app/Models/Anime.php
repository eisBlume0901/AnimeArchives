<?php

namespace App\Models;

class Anime {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Frieren: Beyond Journey\'s End',
                'author' => 'Kanehito Yamada',
                'description' => 'Set in a fantasy world, the elven mage
                Frieren embarks on a quest to reunite with her former comrade
                Himmel, a member of the hero\'s party that defeated the Demon
                King. Their decade-long journey is filled with adventures and
                battles, forging unforgettable bonds. Frieren, having lived over
                a thousand years, brings a unique perspective to the story as she
                reflects on her experiences and seeks to understand humans better.'
            ],
            [
                'id' => 2,
                'title' => 'Undead Unluck',
                'author' => 'Yoshifumi Tozuka',
                'description' => 'Fuko has a special ability that allows her to
                kill anyone she touches if she is not already dead. She meets
                Andy, who is immortal and cannot die. Together, they embark on
                a journey to find a way to lift Fuko\'s curse and uncover the
                secrets of the world.'
            ]
        ];
    }

    public static function find($id) {
        $animeLists = self::all(); // get all the postings from the existing class method

        foreach ($animeLists as $anime) {
            if ($anime['id'] == $id) {
                return $anime;
            }
        }

    }
}
