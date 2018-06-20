<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class InsertIntoCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert([
            ['category' => 'Cakes', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Cupcakes', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Cookies', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Ice Cream', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Pastries', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Pies', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->where([
            ['category' => 'Cakes', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Cupcakes', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Cookies', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Ice Cream', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Pastries', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category' => 'Pies', 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ])->delete();
    }
}
