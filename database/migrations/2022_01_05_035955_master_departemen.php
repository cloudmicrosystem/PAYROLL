<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterDepartemen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_departemen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perusahaan');
            $table->string('nama_departemen');            
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
        Schema::dropIfExists('master_departemen');
    }
}
