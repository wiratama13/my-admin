<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoreToMagazinesItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('magazines_item', function (Blueprint $table) {
            $table->date('tanggal_buat')->after('file_buku');
            $table->text('deskripsi')->after('slug');
            $table->text('deskripsi_singkat')->after('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('magazines_item', function (Blueprint $table) {
            $table->dropColumn('tanggal_buat');
            $table->dropColumn('deskripsi');
            $table->dropColumn('deskripsi_singkat');
        });
    }
}
