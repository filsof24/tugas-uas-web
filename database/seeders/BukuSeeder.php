<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Buku;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bukuData = [
            // Self Improvement (Kategori 1)
            ['kategori_id' => 1, 'judul' => 'Atomic Habits', 'penulis' => 'James Clear', 'penerbit' => 'Gramedia Pustaka Utama', 'tahun_terbit' => 2019, 'stok' => 25],
            ['kategori_id' => 1, 'judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'penerbit' => 'Penerbit Buku Kompas', 'tahun_terbit' => 2018, 'stok' => 30],
            ['kategori_id' => 1, 'judul' => 'The Psychology of Money', 'penulis' => 'Morgan Housel', 'penerbit' => 'Penerbit Baca', 'tahun_terbit' => 2021, 'stok' => 15],
            ['kategori_id' => 1, 'judul' => 'Sebuah Seni untuk Bersikap Bodo Amat', 'penulis' => 'Mark Manson', 'penerbit' => 'Grasindo', 'tahun_terbit' => 2018, 'stok' => 40],
            ['kategori_id' => 1, 'judul' => 'Berani Tidak Disukai', 'penulis' => 'Ichiro Kishimi & Fumitake Koga', 'penerbit' => 'Gramedia Pustaka Utama', 'tahun_terbit' => 2019, 'stok' => 20],
            ['kategori_id' => 1, 'judul' => 'Bicara Itu Ada Seninya', 'penulis' => 'Oh Su Hyang', 'penerbit' => 'Bhuana Ilmu Populer', 'tahun_terbit' => 2018, 'stok' => 12],
            ['kategori_id' => 1, 'judul' => 'You Do You: Discovering Life through Experiments', 'penulis' => 'Fellexandro Ruby', 'penerbit' => 'Gramedia Pustaka Utama', 'tahun_terbit' => 2020, 'stok' => 18],
            ['kategori_id' => 1, 'judul' => 'The 7 Habits of Highly Effective People', 'penulis' => 'Stephen R. Covey', 'penerbit' => 'Bhuana Ilmu Populer', 'tahun_terbit' => 2019, 'stok' => 10],
            
            // Novel (Kategori 2)
            ['kategori_id' => 2, 'judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'tahun_terbit' => 2005, 'stok' => 8],
            ['kategori_id' => 2, 'judul' => 'Laut Bercerita', 'penulis' => 'Leila S. Chudori', 'penerbit' => 'Kepustakaan Populer Gramedia', 'tahun_terbit' => 2017, 'stok' => 22],
            ['kategori_id' => 2, 'judul' => 'Cantik Itu Luka', 'penulis' => 'Eka Kurniawan', 'penerbit' => 'Gramedia Pustaka Utama', 'tahun_terbit' => 2015, 'stok' => 14],
            
            // Bisnis & Keuangan (Kategori 3)
            ['kategori_id' => 3, 'judul' => 'Rich Dad Poor Dad', 'penulis' => 'Robert T. Kiyosaki', 'penerbit' => 'Gramedia Pustaka Utama', 'tahun_terbit' => 2016, 'stok' => 16],
            
            // Komik (Kategori 4)
            ['kategori_id' => 4, 'judul' => 'One Piece Vol. 105', 'penulis' => 'Eiichiro Oda', 'penerbit' => 'Elex Media Komputindo', 'tahun_terbit' => 2023, 'stok' => 50],
            ['kategori_id' => 4, 'judul' => 'Jujutsu Kaisen Vol. 20', 'penulis' => 'Gege Akutami', 'penerbit' => 'Elex Media Komputindo', 'tahun_terbit' => 2023, 'stok' => 45],
            
            // Agama (Kategori 5)
            ['kategori_id' => 5, 'judul' => 'Kisah Para Nabi', 'penulis' => 'Ibnu Katsir', 'penerbit' => 'Qisthi Press', 'tahun_terbit' => 2020, 'stok' => 7],
        ];

        foreach ($bukuData as $buku) {
            Buku::create($buku);
        }
    }
}
