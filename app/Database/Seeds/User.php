<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username'      => 'keris',
            'password'      => password_hash('admin', PASSWORD_DEFAULT),
            'nama_lengkap'  => 'Christian Santoso',
            'email'         => 'kerissakti@gmail.com',
        ];
        $this->db->table('user')->insert($data);
    }
}
