<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_buku');
            $table->string('nama_peminjam');
            $table->string('kelas_jurusan');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->enum('pengisi_data',['Tegar','Alfian','Iffan','Darell']);
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
        Schema::dropIfExists('peminjamen');
    }
}
