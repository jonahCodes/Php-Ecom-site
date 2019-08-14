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
        for($i = 1; $i < 30; $i++){
            Product::create([
                'name'=>'Monitor' . $i,
                'slug'=>'monitor-' . $i,
                'details'=>[24,27,32][array_rand([24,27,32])] . 'inch' . [144,180,240][array_rand([144,180,240])] . 'Hertz gaming monitor',
                'price'=>rand(200,600),
                'description'=>'Lorem' . $i . 'ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.',
        ])->categories()->attach(3);
    }
    $product = Product::find(1);
    $product->categories()->attach(2);

        for($i = 1; $i < 30; $i++){
            Product::create([
                'name'=>'Desktop' . $i,
                'slug'=>'desktop-' . $i,
                'details'=>'Core i'. [7,5,9][array_rand([7,5,9])] .' '. [1,2,3][array_rand([1,2,3])] . 'TB SSD, 32GB RAM',
                'price'=>rand(1499,2499),
                'description'=>'Lorem' . $i . 'ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.',
        ])->categories()->attach(2);
    }
            for($i = 1; $i < 30; $i++){
                Product::create([
                    'name'=>'Laptop' . $i,
                    'slug'=>'laptop-' . $i,
                    'details'=>[13,14,15][array_rand([13,14,15])] . 'inch' . [1,2,3][array_rand([1,2,3])] . 'TB SSD, 32GB RAM',
                    'price'=>rand(1499,2499),
                    'description'=>'Lorem' . $i . 'ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.',
            ])->categories()->attach(1);
        }

        // Product::create([
        //     'name'=>'laptop 1',
        //     'slug'=>'laptop-1',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 2',
        //     'slug'=>'laptop-2',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 3',
        //     'slug'=>'laptop-3',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 4',
        //     'slug'=>'laptop-4',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 5',
        //     'slug'=>'laptop-5',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 6',
        //     'slug'=>'laptop-6',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 7',
        //     'slug'=>'laptop-7',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 8',
        //     'slug'=>'laptop-8',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 9',
        //     'slug'=>'laptop-9',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
        // Product::create([
        //     'name'=>'laptop 10',
        //     'slug'=>'laptop-10',
        //     'details'=>' 13inch 1TB SSD 16GB RAM',
        //     'price'=> 1022,
        //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.'
        // ]);
    }
}
