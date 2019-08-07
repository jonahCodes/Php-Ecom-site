<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'laptop 1',
            'slug'=>'laptop-1',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 2',
            'slug'=>'laptop-2',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 3',
            'slug'=>'laptop-3',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 4',
            'slug'=>'laptop-4',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 5',
            'slug'=>'laptop-5',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 6',
            'slug'=>'laptop-6',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 7',
            'slug'=>'laptop-7',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 8',
            'slug'=>'laptop-8',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 9',
            'slug'=>'laptop-9',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
        Product::create([
            'name'=>'laptop 10',
            'slug'=>'laptop-10',
            'details'=>' 13inch 1TB SSD 16GB RAM',
            'price'=> 1022,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        ]);
    }
}
