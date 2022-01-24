<?php

namespace App\Models;

use CodeIgniter\Model;

class Dokter extends Model
{
    protected $table      = 'dokter';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['kode_dokter', 'nama', 'gender', 'alamat'];

    protected $validationRules = [
        'kode_dokter' => 'required',
        'nama' => 'required',
        'gender' => 'permit_empty',
        'alamat' => 'required',
    ];

    protected $validationMessages = [
        'kode_dokter' => [
            'required' => 'Kode dokter harus diisi'
        ],
        'nama' => [
            'required' => 'Nama harus diisi'
        ],
        'alamat' => [
            'required' => 'alamat harus diisi'
        ],
    ];
}
