<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('no_telepon', 20);
            $table->string('nama_perusahaan');
            $table->string('nama_pemilik', 50);
            $table->text('alamat_perusahaan');
            $table->string('no_ahu');
            $table->string('bidang_usaha');
            $table->string('no_telepon_perusahaan', 20);
            $table->string('jabatan', 20);
            $table->enum('status', ['Terima', 'Tolak', 'Pending']);
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
        Schema::dropIfExists('member');
    }
}
