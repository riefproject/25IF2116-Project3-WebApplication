<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama', 'jenis_kelamin', 'tanggal_lahir'];

    public function getMahasiswa($nim = false)
    {
        if ($nim === false) {
            return $this->findAll();
        }

        return $this->where(['nim' => $nim])->first();
    }
}
