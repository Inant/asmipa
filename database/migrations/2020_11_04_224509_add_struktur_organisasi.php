<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStrukturOrganisasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("ALTER TABLE tentang CHANGE COLUMN tipe tipe ENUM('Pengantar', 'Deskripsi', 'Sambutan', 'Sejarah', 'Visi', 'Misi', 'Struktur Organisasi')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("ALTER TABLE tentang CHANGE COLUMN tipe tipe ENUM('Pengantar', 'Deskripsi', 'Sambutan', 'Sejarah', 'Visi', 'Misi')");
    }
}
