<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //products insert
        DB::table('products')->insert([
        [
            'name'=>'Apple iPhone 12 Pro Max',
            'price'=>'140000',
            'description'=>'This is Apple Latest Products with 128Gb of storage',
            'category'=>'Mobile',
            'gallery'=>'https://m.media-amazon.com/images/I/71FuI8YvCNL._AC_SL1500_.jpg'
        ],

        [
            'name'=>'Nokia G20',
            'price'=>'19000',
            'description'=>'This is Nokia Latest Products with 64Gb of storage',
            'category'=>'Mobile',
            'gallery'=>'https://m.media-amazon.com/images/I/61fSnahBPCS._AC_SL1500_.jpg'
        ],
        [
            'name'=>'LG LED TV',
            'price'=>'140000',
            'description'=>'LG 55UP8000PUA Alexa Built-in 55" 4K Smart UHD TV (Old Model)',
            'category'=>'TV',
            'gallery'=>'https://m.media-amazon.com/images/I/A1zA6slZ2-L._AC_SL1500_.jpg'
        ],
        [
            'name'=>'Samsung TV',
            'price'=>'67000',
            'description'=>'
            SAMSUNG 43-Inch Class Crystal UHD AU8000 Series - 4K UHD HDR Smart TV with Alexa Built-in (UN43AU8000FXZA, 2021 Model)',
            'category'=>'TV',
            'gallery'=>'https://m.media-amazon.com/images/I/71LJJrKbezL._AC_SL1500_.jpg'
        ],[
            'name'=>'Kenmore Refrigerator',
            'price'=>'55000',
            'description'=>'Kenmore 30" Top-Freezer Refrigerator with Ice Maker and 18 Cubic Ft. Total Capacity, Stainless Steel',
            'category'=>'Refrigerator',
            'gallery'=>'https://m.media-amazon.com/images/I/71xq6UN+YJL._AC_SL1500_.jpg'
        ]
        
    
        ]);
    }
}
