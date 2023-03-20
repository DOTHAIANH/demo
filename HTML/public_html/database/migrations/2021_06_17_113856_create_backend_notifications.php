<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backend_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('type')->nullable();
            $table->text('content')->nullable();
            $table->bigInteger('target_member_id')->nullable()->default(-1)->comment('-1 Admin');
            $table->bigInteger('ref_id')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('backend_notifications');
    }
}
