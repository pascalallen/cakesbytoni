<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class InsertIntoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('images')->insert([
            ['name' => 'Unicorn Cake 0', 'description' => '', 'imgur_id' => 'yR8LgqG', 'category_id' => 1, 'slug' => 'unicorn-cake-0', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Unicorn Cake 1', 'description' => '', 'imgur_id' => 'cwsNKum', 'category_id' => 1, 'slug' => 'unicorn-cake-1', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Unicorn Cake 2', 'description' => '', 'imgur_id' => 'fR6FkFo', 'category_id' => 1, 'slug' => 'unicorn-cake-2', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Unicorn Cake 3', 'description' => '', 'imgur_id' => '9bZ1pfl', 'category_id' => 1, 'slug' => 'unicorn-cake-3', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 0', 'description' => '', 'imgur_id' => 'MpiWcor', 'category_id' => 1, 'slug' => 'train-cake-0', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 1', 'description' => '', 'imgur_id' => 'wsSgmYL', 'category_id' => 1, 'slug' => 'train-cake-1', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 2', 'description' => '', 'imgur_id' => 'gfR4iBK', 'category_id' => 1, 'slug' => 'train-cake-2', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 3', 'description' => '', 'imgur_id' => 'nn8GL8Y', 'category_id' => 1, 'slug' => 'train-cake-3', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 4', 'description' => '', 'imgur_id' => 'wsSgmYL', 'category_id' => 1, 'slug' => 'train-cake-4', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Magical Cupcakes 0', 'description' => '', 'imgur_id' => '3TWSKrA', 'category_id' => 2, 'slug' => 'magical-cupcakes-0', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Magical Cupcakes 1', 'description' => '', 'imgur_id' => 'tKPUpxn', 'category_id' => 2, 'slug' => 'magical-cupcakes-1', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Magical Cupcakes 2', 'description' => '', 'imgur_id' => 'gpswrdX', 'category_id' => 2, 'slug' => 'magical-cupcakes-2', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Magical Cupcakes 3', 'description' => '', 'imgur_id' => 'RyvkPui', 'category_id' => 2, 'slug' => 'magical-cupcakes-3', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
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
            ['name' => 'Unicorn Cake 0', 'description' => '', 'imgur_id' => 'yR8LgqG', 'category_id' => 1, 'slug' => 'unicorn-cake-0', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Unicorn Cake 1', 'description' => '', 'imgur_id' => 'cwsNKum', 'category_id' => 1, 'slug' => 'unicorn-cake-1', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Unicorn Cake 2', 'description' => '', 'imgur_id' => 'fR6FkFo', 'category_id' => 1, 'slug' => 'unicorn-cake-2', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Unicorn Cake 3', 'description' => '', 'imgur_id' => '9bZ1pfl', 'category_id' => 1, 'slug' => 'unicorn-cake-3', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 0', 'description' => '', 'imgur_id' => 'MpiWcor', 'category_id' => 1, 'slug' => 'train-cake-0', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 1', 'description' => '', 'imgur_id' => 'wsSgmYL', 'category_id' => 1, 'slug' => 'train-cake-1', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 2', 'description' => '', 'imgur_id' => 'gfR4iBK', 'category_id' => 1, 'slug' => 'train-cake-2', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 3', 'description' => '', 'imgur_id' => 'nn8GL8Y', 'category_id' => 1, 'slug' => 'train-cake-3', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Train Cake 4', 'description' => '', 'imgur_id' => 'wsSgmYL', 'category_id' => 1, 'slug' => 'train-cake-4', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Magical Cupcakes 0', 'description' => '', 'imgur_id' => '3TWSKrA', 'category_id' => 2, 'slug' => 'magical-cupcakes-0', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Magical Cupcakes 1', 'description' => '', 'imgur_id' => 'tKPUpxn', 'category_id' => 2, 'slug' => 'magical-cupcakes-1', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Magical Cupcakes 2', 'description' => '', 'imgur_id' => 'gpswrdX', 'category_id' => 2, 'slug' => 'magical-cupcakes-2', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Magical Cupcakes 3', 'description' => '', 'imgur_id' => 'RyvkPui', 'category_id' => 2, 'slug' => 'magical-cupcakes-3', 'main' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ])->delete();
    }
}
