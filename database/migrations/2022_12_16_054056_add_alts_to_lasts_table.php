<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAltsToLastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lasts', function (Blueprint $table) {
            $table->string('alts')->after('image');
            $table->string('metas')->after('alts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lasts', function (Blueprint $table) {
            $table->dropColumn('alts');
            $table->dropColumn('metas');
        });
    }
}
