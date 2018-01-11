<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acounts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('city');
            $table->integer('user_id')->unsigned();
            $table->integer('enterprise_id')->unsigned();
            $table->text('description');
            $table->float('amount');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('enterprise_id')->references('id')->on('enterprises')->onDelete('cascade');
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
        Schema::dropIfExists('acounts');
    }
}
