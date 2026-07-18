<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = [
            ['nama_kategori' => 'Self Improvement'],
            ['nama_kategori' => 'Novel'],
            ['nama_kategori' => 'Bisnis & Keuangan'],
            ['nama_kategori' => 'Komik'],
            ['nama_kategori' => 'Agama'],
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
