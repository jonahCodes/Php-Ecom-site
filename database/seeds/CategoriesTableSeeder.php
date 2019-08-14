<?php
use App\Category;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name'=>'Laptops','slug'=>'laptops','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'Desktops','slug'=>'desktops','created_at'=>$now,'updated_at'=>$now],
            ['name'=>'Monitors','slug'=>'monitors','created_at'=>$now,'updated_at'=>$now],

        ]);
    }
}
