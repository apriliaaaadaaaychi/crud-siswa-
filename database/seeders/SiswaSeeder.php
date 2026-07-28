<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::create([
            'nama' => 'Ahmad Rizky',
            'kelas' => '12 RPL 1',
        ]);

        Siswa::create([
            'nama' => 'Siti Nurhaliza',
            'kelas' => '12 RPL 2',
        ]);
    }
}