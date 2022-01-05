<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiPenggajian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_penggajian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perusahaan');            
            $table->bigInteger('id_periode');            
            $table->bigInteger('id_karyawan');
            $table->date('tanggal');                                      
            $table->string('keterangan')->nullable();            
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('transaksi_penggajian');
    }
}
