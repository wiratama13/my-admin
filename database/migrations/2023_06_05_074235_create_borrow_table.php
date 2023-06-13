<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow', function (Blueprint $table) {
            $table->id();
            $table->foreignId('magazine_id')->nullable()->references('id')->on('magazines');
            $table->foreignId('users_id')->nullable()->references('id')->on('users');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->enum('status_pinjaman',['dipinjam','dikembalikan','terlambat','hilang']);
            $table->integer('denda');
            $table->enum('cek',['selesai','belum_selesai']);
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
        Schema::dropIfExists('borrow');
    }
}
