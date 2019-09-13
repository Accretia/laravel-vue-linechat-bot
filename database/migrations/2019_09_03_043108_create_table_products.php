<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price' , 20 , 2)->default(0);
            $table->integer('color_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('img_url')->default('default.jpg');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_color_id_foreign');
            $table->dropForeign('products_brand_id_foreign');
            $table->dropForeign('products_category_id_foreign');
        });
        Schema::dropIfExists('products');
        Schema::dropIfExists('colors');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('categories');
    }
}
