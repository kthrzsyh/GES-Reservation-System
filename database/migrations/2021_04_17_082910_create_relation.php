<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_kursi', function (Blueprint $table) {
            $table->bigInteger('code_id')->unsigned()->nullable();
            $table->foreign('code_id')->references('id')->on('tb_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_kursi', function (Blueprint $table) {
            //
        });
    }
}
