<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterPeriode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('master_periode', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perusahaan');
            $table->integer('tahun');            
            $table->integer('bulan');            
            $table->date('tanggal_awal');            
            $table->date('tanggal_akhir');   
            $table->tinyInteger('is_aktif');         
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
        Schema::dropIfExists('master_periode');
    }
}
