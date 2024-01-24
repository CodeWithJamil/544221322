<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Commerce extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commerce')->insert(array(
            ['kategori'=>'Manga','namaBarang'=>'Manga Jibaku Shounen Hanako-Kun Vol. 11','deskripsi'=>'Manga Jibaku Shounen Hanako-Kun Vol. 11 Limited Stock 2024 Harga Diskon Bikin Ngiler','alamatPengirim'=>'Surabaya','kondisi'=>'Baru','harga'=>'Rp.160.000,00-'],
            ['kategori'=>'Plushie','namaBarang'=>'Hololive ID Kobo Kanaeru Plush Hololive','deskripsi'=>'Hololive ID Kobo Kanaeru Plush Hololive Limited Edition 2024 Terbaru','alamatPengirim'=>'Malang','kondisi'=>'Baru','harga'=>'Rp.680.000,00-'],
            ['kategori'=>'Figure','namaBarang'=>'Zhongli Vortex Vanquisher Battle Ver.','deskripsi'=>'Zhongli Vortex Vanquisher Battle Ver. Limited Stock Terbaru Mantap Jiwa ','alamatPengirim'=>'Jakarta','kondisi'=>'Baru','harga'=>'Rp.840.000,00-']
        ));
    }
}
