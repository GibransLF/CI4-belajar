<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'Gibran Alfi Ananta',
            'kelas'    => '12-RPL-3',
            'tgl_lahir'    => '2003-07-29'
        ];

        // Using Query Builder
        $this->db->table('siswas')->insert($data);

        $data = [
            'nama' => 'Latania Fortina',
            'kelas'    => '12-RPL-2',
            'tgl_lahir'    => '2022=02=02'
        ];

        // Using Query Builder
        $this->db->table('siswas')->insert($data);
    }
}
