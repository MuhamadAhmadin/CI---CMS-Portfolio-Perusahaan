<?php

namespace App\Models;

use CodeIgniter\Model;

class Kamar extends Model
{
    protected $table      = 'kamar';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['no_kamar', 'lantai', 'max_orang', 'kelas'];

    protected $validationRules = [
        'no_kamar' => 'required',
        'lantai' => 'required',
        'max_orang' => 'permit_empty',
        'kelas' => 'required',
    ];

    protected $validationMessages = [
        'no_kamar' => [
            'required' => 'No Kamar harus diisi'
        ],
        'lantai' => [
            'required' => 'Lantai harus diisi'
        ],
        'kelas' => [
            'required' => 'Kelas harus dipilih'
        ],
    ];
}
