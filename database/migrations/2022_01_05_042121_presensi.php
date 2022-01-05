<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Presensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perusahaan');
            $table->bigInteger('id_periode');
            $table->bigInteger('id_karyawan');
            $table->date('tanggal');                          
            $table->dateTime('jam_hadir')->nullable();                        
            $table->string('lokasi_hadir')->nullable();
            $table->dateTime('jam_pulang')->nullable();                        
            $table->string('lokasi_pulang')->nullable();
            $table->string('keterangan')->nullable();
            $table->tinyInteger('is_approved');
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
        Schema::dropIfExists('presensi');
    }
}
