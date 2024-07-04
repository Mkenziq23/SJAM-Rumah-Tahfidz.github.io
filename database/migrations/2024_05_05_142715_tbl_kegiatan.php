<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string("nama_kegiatan");
            $table->date("tanggal_kegiatan");
            $table->string("tempat_kegiatan");
            $table->string("image")->nullable();
            $table->timestamps();
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kegiatan');
    }
}