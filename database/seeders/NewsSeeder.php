<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = News::create([
            'title'=>'news two',
            'description'=>'Lorem ipsum is placeholder text commonly used in the graphic,
             print, and publishing industries for previewing layouts and visual mockups.',
        ]);
        $news->image()->create([
            'url'=>'images/news2.jpg',
        ]);
    }
}
