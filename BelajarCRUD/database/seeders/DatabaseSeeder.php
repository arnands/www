<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Anggota::create([
            'nama' => 'Arnanda Surya',
            'hp' => '082144954116'
        ]);
        Anggota::create([
            'nama' => 'Kevin Joshua',
            'hp' => '082144678899'
        ]);
        Anggota::create([
            'nama' => 'Limbad',
            'hp' => '082147865463'
        ]);
    }
}
