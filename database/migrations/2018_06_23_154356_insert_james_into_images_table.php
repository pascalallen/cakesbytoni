<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class InsertJamesIntoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('images')->insert([
            ['name' => 'Beer Theme Cake 0', 'description' => '', 'imgur_id' => 'XgZez3V', 'category_id' => 1, 'slug' => 'beer-theme-cake-0', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Beer Theme Cake 1', 'description' => '', 'imgur_id' => 'U1WyJI3', 'category_id' => 1, 'slug' => 'beer-theme-cake-1', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
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
            ['name' => 'Beer Theme Cake 0', 'description' => '', 'imgur_id' => 'XgZez3V', 'category_id' => 1, 'slug' => 'beer-theme-cake-0', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Beer Theme Cake 1', 'description' => '', 'imgur_id' => 'U1WyJI3', 'category_id' => 1, 'slug' => 'beer-theme-cake-1', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ])->delete();
    }
}
