<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;
use App\Models\Cuti;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $karyawan = [
            [
                'Nomor_Induk' => 'IP06001',
                'Nama' => 'Agus',
                'Alamat' => 'Jln Gaja Mada no 12, Surabaya',
                'Tanggal_Lahir' => "1980-01-11",
                'Tanggal_Bergabung' => "2005-08-07",
            ],
            [
                'Nomor_Induk' => 'IP06002',
                'Nama' => 'Amin',
                'Alamat' => 'Jln Imam Bonjol no 11, Mojokerto',
                'Tanggal_Lahir' => "1977-09-03",
                'Tanggal_Bergabung' => "2005-08-07",
            ],
            [
                'Nomor_Induk' => 'IP06003',
                'Nama' => 'Yusuf',
                'Alamat' => 'Jln A Yani Raya 15 No 14 Malang',
                'Tanggal_Lahir' => "1973-08-08",
                'Tanggal_Bergabung' => "2005-08-06",
            ],
            #4
            [
                'Nomor_Induk' => 'IP06004',
                'Nama' => 'Alyssa',
                'Alamat' => 'Jln Bungur Sari V no 166, Bandung',
                'Tanggal_Lahir' => "1983-03-18",
                'Tanggal_Bergabung' => "2006-09-06",
            ],
            #5
            [
                'Nomor_Induk' => 'IP06005',
                'Nama' => 'Maulana ',
                'Alamat' => 'Jln Candi Agung, No 78 Gg 5, Jakarta',
                'Tanggal_Lahir' => "1978-11-10",
                'Tanggal_Bergabung' => "2006-09-10",
            ],
            #6
            [
                'Nomor_Induk' => 'IP06006',
                'Nama' => 'Agfika',
                'Alamat' => 'Jln Nangka, Jakarta Timur',
                'Tanggal_Lahir' => "1979-02-07",
                'Tanggal_Bergabung' => "2007-01-02",
            ],
            [
                'Nomor_Induk' => 'IP06007',
                'Nama' => 'James',
                'Alamat' => 'Jln Merpati, 8 Surabaya',
                'Tanggal_Lahir' => "1989-05-18",
                'Tanggal_Bergabung' => "2007-04-04",
            ],
            [
                'Nomor_Induk' => 'IP06008',
                'Nama' => 'Octavanus',
                'Alamat' => 'Jln A Yani 17, B 08 Sidoarjo',
                'Tanggal_Lahir' => "1985-04-14",
                'Tanggal_Bergabung' => "2007-05-19",
            ],
            [
                'Nomor_Induk' => 'IP06009',
                'Nama' => 'Nugroho',
                'Alamat' => 'Jln Duren tiga 167, Jakarta Selatan',
                'Tanggal_Lahir' => "1984-01-01",
                'Tanggal_Bergabung' => "2008-01-16",
            ],
            [
                'Nomor_Induk' => 'IP06010',
                'Nama' => 'Raisa',
                'Alamat' => 'Jln Kelapa Sawit, Jakarta Selatan',
                'Tanggal_Lahir' => "1990-10-17",
                'Tanggal_Bergabung' => "2008-08-16",
            ],

        ];

        Karyawan::insert($karyawan);

    $cuti = [ 
            [
                'Nomor_Induk' => 'IP06001',
                'Tanggal_Cuti' => '2020-08-02',
                'Lama_Cuti' => 2,
                'Keterangan' => 'Acara Keluarga'
            ],
            [
                'Nomor_Induk' => 'IP06001',
                'Tanggal_Cuti' => '2020-08-18',
                'Lama_Cuti' => 2,
                'Keterangan' => 'Anak Sakit'
            ],
            [
                'Nomor_Induk' => 'IP06006',
                'Tanggal_Cuti' => '2020-08-19',
                'Lama_Cuti' => 1,
                'Keterangan' => 'Nenek Sakit'
            ],
            [
                'Nomor_Induk' => 'IP06007',
                'Tanggal_Cuti' => '2020-08-23',
                'Lama_Cuti' => 1,
                'Keterangan' => 'Sakit'
            ],
            [
                'Nomor_Induk' => 'IP06004',
                'Tanggal_Cuti' => '2020-08-29',
                'Lama_Cuti' => 5,
                'Keterangan' => 'Menikah'
            ],
            [
                'Nomor_Induk' => 'IP06003',
                'Tanggal_Cuti' => '2020-08-30',
                'Lama_Cuti' => 2,
                'Keterangan' => 'Acara Keluarga'
            ]
        ];

        Cuti::insert($cuti);
    }
}
