<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->bigInteger('member_id');
            $table->decimal('sub_total', 11, 3)->nullable();
            $table->decimal('total', 11, 3)->nullable();
            $table->integer('total_item')->nullable();
            $table->text('note')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->tinyInteger('payment_type')->nullable();
            $table->text('meta_payment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->bigInteger('order_id');
            $table->text('product_id');
            $table->decimal('price', 11, 3)->nullable();
            $table->decimal('total', 11, 3)->nullable();
            $table->integer('qty')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_items');
    }
}
