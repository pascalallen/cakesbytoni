<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class InsertMoreIntoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('images')->insert([
            ['name' => 'Fruit Ice Cream Cake 0', 'description' => '', 'imgur_id' => 'YBcmTSO', 'category_id' => 1, 'slug' => 'fruit-ice-cream-cake-0', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Peanut Brittle Ice Cream Cake 0', 'description' => '', 'imgur_id' => 'AMSPIiU', 'category_id' => 1, 'slug' => 'peanut-brittle-ice-cream-cake-0', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Colorful Cake 0', 'description' => '', 'imgur_id' => '5uKktcV', 'category_id' => 1, 'slug' => 'colorful-cake-0', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Lorax Cake 0', 'description' => '', 'imgur_id' => 'vi1PhxQ', 'category_id' => 1, 'slug' => 'lorax-cake-0', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('images')->where([
            ['name' => 'Fruit Ice Cream Cake 0', 'description' => '', 'imgur_id' => 'YBcmTSO', 'category_id' => 1, 'slug' => 'fruit-ice-cream-cake-0', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Peanut Brittle Ice Cream Cake 0', 'description' => '', 'imgur_id' => 'AMSPIiU', 'category_id' => 1, 'slug' => 'peanut-brittle-ice-cream-cake-0', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Colorful Cake 0', 'description' => '', 'imgur_id' => '5uKktcV', 'category_id' => 1, 'slug' => 'colorful-cake-0', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Lorax Cake 0', 'description' => '', 'imgur_id' => 'vi1PhxQ', 'category_id' => 1, 'slug' => 'lorax-cake-0', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ])->delete();
    }
}
