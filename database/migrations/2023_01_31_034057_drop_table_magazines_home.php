<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTableMagazinesHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('magazines_home');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('magazines_home', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('pembuka');
            $table->timestamps();
        });
    }
}
