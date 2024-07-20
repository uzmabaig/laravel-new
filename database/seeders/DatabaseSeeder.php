<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    $this->call([
    //     StudentSeeder::class
    //    ]);

    //    $this->call([
    //     PeopleSeeder::class
    //    ]);

    //    $this->call([
    //     ReporterSeeder::class
    //    ]);

       $this->call([
        NewsSeeder::class
       ]);
       
      
    }
}
