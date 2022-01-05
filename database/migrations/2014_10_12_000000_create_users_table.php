<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perusahaan');
            $table->bigInteger('id_departemen');
            $table->bigInteger('id_jabatan');
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('level');
            $table->string('nip');
            $table->string('nama_karyawan');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('no_telp');
            $table->string('agama');
            $table->string('is_nikah');
            $table->string('alamat');
            $table->string('foto');
            $table->tinyInteger('flag');
            $table->string('created_by');
            $table->string('updated_by');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
