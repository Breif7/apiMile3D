<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'Artículo Científico 1',
                'description' => 'Descripción del Artículo Científico 1.',
                'published_on' => Carbon::create(2023, 1, 1),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Artículo Científico 2',
                'description' => 'Descripción del Artículo Científico 2.',
                'published_on' => Carbon::create(2023, 1, 2),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Artículo Científico 3',
                'description' => 'Descripción del Artículo Científico 3.',
                'published_on' => Carbon::create(2023, 1, 3),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
