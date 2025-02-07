<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::create([
            'nomor_peserta' => '0001',
            'nama_sekolah' => 'SMP Negeri 2 Dayeuh Kolot',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0002',
            'nama_sekolah' => 'SMP Negeri 2 Katapang C',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0003',
            'nama_sekolah' => 'SMP Negeri 2 Kersamanah Garut',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0004',
            'nama_sekolah' => 'SMP Negeri 1 Bojongsoang A',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0005',
            'nama_sekolah' => 'SMP Negeri 2 Katapang A',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0006',
            'nama_sekolah' => 'SMP Negeri 2 Cileunyi B',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0007',
            'nama_sekolah' => 'SMP Negeri 3 Padalarang E',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0008',
            'nama_sekolah' => 'SMP Negeri 28 Bandung',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0009',
            'nama_sekolah' => 'SMP Negeri 3 Padalarang B',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0010',
            'nama_sekolah' => 'SMP Negeri 2 Cileunyi C',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0011',
            'nama_sekolah' => 'Daarut Tauhid Boarding School Putra',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0012',
            'nama_sekolah' => 'SMP Negeri 3 Padalarang A',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0013',
            'nama_sekolah' => 'SMP Negeri 2 Katapang D',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0014',
            'nama_sekolah' => 'SMP Negeri 3 Padalarang F',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0015',
            'nama_sekolah' => 'SMP Negeri 9 Bandung',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0016',
            'nama_sekolah' => 'SMP Negeri 3 Padalarang C',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0017',
            'nama_sekolah' => 'SMP Negeri 1 Bojongsoang B',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0018',
            'nama_sekolah' => 'SMP Negeri 2 Katapang B',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0019',
            'nama_sekolah' => 'SMP Negeri 2 Cileunyi A',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0020',
            'nama_sekolah' => 'SMP Darul Hikmah',
            'status' => 'Belum Dinilai',
        ]);

        Sekolah::create([
            'nomor_peserta' => '0021',
            'nama_sekolah' => 'SMP Negeri 3 Padalarang D',
            'status' => 'Belum Dinilai',
        ]);
    }
}
