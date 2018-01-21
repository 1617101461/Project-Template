<?php

use Illuminate\Database\Seeder;

class coba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang=[
        			['Kode_barang'=>'124268','Nama_barang'=>'sabun','Harga'=>'5000'],
        			['Kode_barang'=>'124268','Nama_barang'=>'sabun','Harga'=>'5000'],
        			['Kode_barang'=>'124268','Nama_barang'=>'sabun','Harga'=>'5000']
        ];

        DB::table('barang')->insert($barang);
    }
}
