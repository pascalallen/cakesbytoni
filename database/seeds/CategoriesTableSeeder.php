<?php

use Illuminate\Database\Seeder;
use App\Category;
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
        Category::insert([
            ['category' => 'Cakes', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Cupcakes', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Cookies', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Ice Cream', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Pastries', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Pies', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
