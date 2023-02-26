<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
           
            [
                'product_name' => 'Prepoured Agar Petri Dish ',
                'price' => 30,
                'stock' => '100',
                'description' => 'Prepoured petr ',
                'pict' => '1676059500',
            ],
            [
                'product_name' => 'Spawn Jars',
                'price' => 6,
                'stock' => 'lorem ipsum',
                'description' => '',
                'pict' => '1676059500',
            ],
            [
                'product_name' => 'jdidsdeeer',
                'price' => 6,
                'stock' => 'lorem ipsum',
                'description' => 'ahhhhhhhhhhhhhhhhhhhhhhhhhh',
                'pict' => '1676059500',
            ],
           

           
           
        ];
        Product::insert($products);
    
    }
}
