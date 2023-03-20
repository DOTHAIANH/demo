<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('phone')->nullable();
            $table->text('user_name')->nullable();
            $table->text('email')->nullable();
            $table->decimal('account_balance', 15, 0)->nullable()->comment('Số dư tài khoản');
            $table->text('password')->nullable();
            $table->tinyInteger('status')->nullable()->default(1);
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
        Schema::dropIfExists('members');
    }
}
