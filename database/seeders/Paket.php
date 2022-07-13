<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Paket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement("INSERT INTO pakets (id, nama, harga, keterangan, created_at, updated_at) VALUES (NULL, 'Hemat', '212.500', 'Asam Urat, Cholesterol, Cholesterol Total, Gula Darah Sewaktu, Hematologi, Trigliserida, Cek Urin', NULL, NULL), (NULL, 'Cholesterol', '180.000', 'Cholesterol, Cholesterol Total, HDL Cholesterol, LDL Cholesterol, Rasio Cholesterol Total dan LDL, Trigliserida', NULL, NULL), (NULL, 'Perak', '180.000', 'Cholesterol Total, Creatimin, Gula Darah Puasa, Hematologi Lengkap, Urin lengkap, Rontgen Thorax, SGOT, SGPT, Trigliserida', NULL, NULL)");
    }
}
