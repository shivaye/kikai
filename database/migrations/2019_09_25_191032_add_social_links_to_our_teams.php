<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialLinksToOurTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('our_teams', function (Blueprint $table) {
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_teams', function (Blueprint $table) {
            //
        });
    }
}
