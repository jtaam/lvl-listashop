<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug');
            $table->text('sub_title');
            $table->unsignedInteger('category_id')->default(0);
            $table->unsignedInteger('brand_id')->default(0);
            $table->unsignedInteger('color_id')->default(0);
            $table->float('price')->default(0.00);
            $table->float('new_price')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('view_count');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
