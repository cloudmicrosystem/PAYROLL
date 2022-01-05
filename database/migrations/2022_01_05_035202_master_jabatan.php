<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterJabatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_jabatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perusahaan');
            $table->string('nama_jabatan');
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
        Schema::dropIfExists('master_jabatan');
    }
}
