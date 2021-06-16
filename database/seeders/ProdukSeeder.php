<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("produk")->insert([
                [
                    "nama_produk" => "ALCOHOL GEL POLISH CLEANSER GP-CLN01",
                    "kategori" => "L QUEENLY",
                    "harga" => "12500",
                    "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "1000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "1000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "12500",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "12500",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "1000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "13000",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "ALUMUNIUM FOIL PET SHEET 250mm IM",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "1000",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "ARM PENDEK MODEL U",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "13000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "ARM SUPPORT KECIL",
                "kategori" => "L MTH TABUNG (LK)",
                "harga" => "13000",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "ARM SUPPORT KOTAK PUTIH",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "13000",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "ARM SUPPORT PENDEK POLOS",
                "kategori" => "L MTH TABUNG (LK)",
                "harga" => "13000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "ARM SUPPORT S IM",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "1000",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "ARM SUPPORT T (IMPORT)",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "13000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "ARM SUPPORT T - MODEL 1 ( LOKAL )",
                "kategori" => "L MTH TABUNG (LK)",
                "harga" => "10000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "BLACK LASER TONER FP-T3 (100gr)",
                "kategori" => "L MTH AKSESORIS (IM)",
                "harga" => "13000",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "BODY PRINTER CANON IP2770",
                "kategori" => "SP MTH SPAREPART (LK)",
                "harga" => "500",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "BODY PRINTER T13X",
                "kategori" => "SP MTH SPAREPART (LK)",
                "harga" => "15000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "10000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "10000",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "1500",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "1500",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "1500",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "1000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "1500",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "1500",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "1000",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)",
                "kategori" => "CI MTH TINTA LAIN (IM)",
                "harga" => "1500",
                "status" => "tidak bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL KOTAK 100ML LK",
                "kategori" => "L MTH AKSESORIS (LK)",
                "harga" => "1000",
                "status" => "bisa dijual"
                ],
                [
                "nama_produk" => "BOTOL 10ML IM",
                "kategori" => "S MTH STEMPEL (IM)",
                "harga" => "1000",
                "status" => "tidak bisa dijual"
                ]
        ]);
    }
}
