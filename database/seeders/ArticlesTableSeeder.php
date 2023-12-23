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
                'title' => 'Impresión 3D Revolucionaria',
                'description' => 'Explorando las nuevas fronteras de la impresión 3D en la industria médica.',
                'published_on' => Carbon::create(2023, 1, 1),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'El Futuro de la Construcción con 3D',
                'description' => 'Cómo la impresión 3D está cambiando el panorama de la construcción y la arquitectura.',
                'published_on' => Carbon::create(2023, 1, 2),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Arte y Diseño en la Era de la Impresión 3D',
                'description' => 'Una mirada a cómo los artistas están utilizando la impresión 3D para llevar su trabajo a nuevas dimensiones.',
                'published_on' => Carbon::create(2023, 1, 3),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
