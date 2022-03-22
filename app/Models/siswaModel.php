<?php

namespace App\Models;

use CodeIgniter\Model;

class siswaModel extends Model
{
    protected $table      = 'siswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'kelas', 'tgl_lahir'];

//     public function test(){
//         echo 'siswaModel';
//     }
}