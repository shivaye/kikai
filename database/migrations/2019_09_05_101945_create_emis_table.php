<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('project_id');
            $table->string('installment')->nullable();
            $table->string('time');
            $table->string('pending_amount');
            $table->string('date')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('emis');
    }
}
