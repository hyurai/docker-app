<?php

use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('tweets')->truncate();
        //
        $tweets = [
            [ 'infomations_id' => 1,
              'text' => 'おはよう'
            ],
            [ 'infomations_id' => 2,
              'text' => 'こんばんわ'
             ],
            [ 'infomations_id' => 3,
              'text' => 'こんにちわ'
            ], 
        ];

        foreach($tweets as $tweet){
            \App\Tweet::create($tweet);
        }
        //
    }
}
