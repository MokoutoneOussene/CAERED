<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'OUEDRAOGO',
            'prenom' => 'Boukary',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'roles_id' => 1,
            'active' => 'actif',
        ]);
    }
}
