<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypePubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_publications')->insert([
            'libelle' => 'Livre',
        ]);

        DB::table('type_publications')->insert([
            'libelle' => 'Section',
        ]);

        DB::table('type_publications')->insert([
            'libelle' => 'Article de journal',
        ]);

        DB::table('type_publications')->insert([
            'libelle' => 'Article dans un periodique',
        ]);

        DB::table('type_publications')->insert([
            'libelle' => 'Comptes rendus de conferences',
        ]);

        DB::table('type_publications')->insert([
            'libelle' => 'Rapports',
        ]);
    }
}
