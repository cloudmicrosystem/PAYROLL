<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiPenggajianDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // id
        // id_transaksi	
        // Keterangan (Komponen penggajian, ex : gaji pokok, tunjangan, potongan bpjs, dll)
        // Debit
        // Kredi
        Schema::create('transaksi_penggajian_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_transaksi');                                                    
            $table->string('keterangan')->nullable();            
            $table->decimal('debit');
            $table->decimal('kredit');
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
        Schema::dropIfExists('transaksi_penggajian_detail');
    }
}
