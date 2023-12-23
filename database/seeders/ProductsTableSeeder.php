<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'ProductName' => 'Estatuilla de Ciervo Geométrico',
                'Description' => 'Estatuilla decorativa con diseño geométrico, perfecta para amantes de la naturaleza y el arte moderno.',
                'Category' => 'Decoración',
                'Price' => 49.99,
                'Material' => 'PLA',
                'Dimensions' => '15cm x 30cm x 15cm',
                'Weight' => 0.5,
                'ImageURLs' => 'http://example.com/images/ciervo.jpg',
                'StockQuantity' => 10,
                'created_at' => Carbon::today()->toDateString()
            ],
            [
                'ProductName' => 'Maceta Autoregable Lunar',
                'Description' => 'Maceta con diseño inspirado en la superficie lunar y sistema de autorriego. Ideal para interiores y escritorios.',
                'Category' => 'Hogar',
                'Price' => 34.99,
                'Material' => 'ABS',
                'Dimensions' => '20cm x 20cm x 20cm',
                'Weight' => 0.75,
                'ImageURLs' => 'http://example.com/images/maceta-lunar.jpg',
                'StockQuantity' => 15,
                'created_at' => Carbon::today()->toDateString()
            ],
            [
                'ProductName' => 'Soporte de Teléfono Anatómico',
                'Description' => 'Soporte para teléfono o tableta con forma de mano, diseñado para un agarre seguro y una apariencia única.',
                'Category' => 'Accesorios',
                'Price' => 19.99,
                'Material' => 'Resina',
                'Dimensions' => '10cm x 25cm x 10cm',
                'Weight' => 0.3,
                'ImageURLs' => 'http://example.com/images/soporte-mano.jpg',
                'StockQuantity' => 20,
                'created_at' => Carbon::today()->toDateString()
            ]
        ]);
    }
}
