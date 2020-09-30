<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new User;

        $administrator->nama = 'Administrator';
        $administrator->email = 'administrator@asmipa.com';
        $administrator->password = \Hash::make('administrator');

        $administrator->save();
    }
}
