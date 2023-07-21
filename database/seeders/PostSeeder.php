<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Contemporary Design',
            'news_content' => 'With a beige color scheme and contemporary design, Susana Machados Suvelle Cuisine merges several types of blogs (food, style and beauty) into a sleek, modern aesthetic. As Susana herself says, her focus is on “the most beautiful things in life.”
            Her blog features everything from a recipe for focaccia and tips for spring fashion, and she supplements this rich content creation with an alluring portfolio of luxurious couture and cuisine photos to build her authority and develop brand awareness.
            When you land on her homepage, a pop-up invites you to join her mailing list, an example of  using email marketing tools to reach her readers. In addition, well-organized and intriguing blog categories at the top of the page further invite readers to get lost in Susanas world.',
            'author' => 1,
        ]);
    }
}
