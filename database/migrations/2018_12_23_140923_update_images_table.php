<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->smallInteger('main')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->string('name')->change();
            $table->string('description')->change();
            $table->integer('category_id')->change();
            $table->smallInteger('main')->change();
        });
    }
}
