<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'judul' => 'Basis Data 11',
            'pengarang' => 'Kemendikbud',
            'penerbit' => 'Kemendikbud',
            'tahun_terbit' => 2022,
            'jumlah_halaman' => 200,
        ]);
    }
}
