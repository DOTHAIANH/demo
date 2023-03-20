<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('sku')->nullable();
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('sale_price')->nullable();
            $table->text('image')->nullable();
            $table->text('servers')->nullable();

            $table->text('desc')->nullable();
            $table->text('related_packages')->nullable();

            $table->tinyInteger('is_stock')->nullable()->default(1);
            $table->tinyInteger('status')->default(1)->nullable();
            $table->tinyInteger('hot')->default(1)->nullable();

            $table->string('type')->nullable();

            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
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
