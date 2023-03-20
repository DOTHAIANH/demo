<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('member_id')->nullable();
            $table->decimal('amount', 20, 3)->nullable();
            $table->tinyInteger('type')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->text('source')->nullable();
            $table->text('token')->nullable();
            $table->text('note')->nullable();
            $table->text('transaction_code')->nullable();
            $table->text('detail_res')->nullable()->comment('Data Api trả về');
            $table->text('extra_payment')->nullable()->comment('Dành cho thẻ cảo, Loại Thẻ Nhà mạng V.v');
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
        Schema::dropIfExists('bill_payments');
    }
}
