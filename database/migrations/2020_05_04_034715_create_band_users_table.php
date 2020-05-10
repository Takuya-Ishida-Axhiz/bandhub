<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('band_id');
            $table->unsignedInteger('user_id');
            // $table->primary(['band_id', 'user_id']);
            


            // //外部キー制約
            // $table->foreign('band_id')
            //     ->references('id')
            //     ->on('bands')
            //     ->onDelete('cascade');
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('band_users');
    }
}
