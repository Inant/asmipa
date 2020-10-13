<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('judul')->unique();
            $table->string('slug')->unique();
            $table->string('penulis', 40);
            $table->date('tanggal');
            $table->string('foto');
            $table->longText('konten');
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
        Schema::dropIfExists('berita');
    }
}
