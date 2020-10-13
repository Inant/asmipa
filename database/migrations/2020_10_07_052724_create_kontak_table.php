<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('telepon', 20)->nullable();
            $table->string('no_hp', 13)->nullable();
            $table->string('email', 40)->nullable();
            $table->string('fb', 40)->nullable();
            $table->string('ig', 40);
            $table->string('youtube', 40);
            $table->text('alamat');
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
        Schema::dropIfExists('kontak');
    }
}
