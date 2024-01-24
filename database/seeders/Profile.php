<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Profile extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile')->insert(array(
            ['nama'=>'Jamilurrahman','password'=>'ayaya','alamat'=>'Sulawesi Selatan','bio'=>'suka kucing','tglLahir'=>'27 September','noHP'=>'081244161996'],
            ['nama'=>'Dzaki Naufal Dhirgham','password'=>'ahaha','alamat'=>'Jawa Barat','bio'=>'suka ngoding','tglLahir'=>'10 Desember','noHP'=>'081223897756']
        ));
    }
}
