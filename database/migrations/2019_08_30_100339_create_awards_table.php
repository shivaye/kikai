<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('short_description',1000);
            $table->text('long_description',10000);
            $table->string('slug');
            $table->string('status')->default('Active');
            $table->string('image_url');
            $table->string('video_url');
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
        Schema::dropIfExists('awards');
    }
}
