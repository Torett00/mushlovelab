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
                'product_name' => 'seddderrr',
                'price' => 6,
                'stock' => 'lorem ipsum',
                'description' => 'ahhhhhhhhhhhhhhhhhhhhhhhhhh',
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
