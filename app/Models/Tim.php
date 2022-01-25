<?php

namespace App\Models;

use CodeIgniter\Model;

class Tim extends Model
{
    protected $table      = 'tim';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'jabatan', 'twitter', 'facebook', 'instagram', 'linkedin', 'photo'];

    protected $validationRules = [
        'nama' => 'required',
        'jabatan' => 'permit_empty',
        'twitter' => 'permit_empty',
        'facebook' => 'permit_empty',
        'instagram' => 'permit_empty',
        'linkedin' => 'permit_empty',
    ];

    protected $validationMessages = [
        'nama' => [
            'required' => 'Nama harus diisi'
        ],
    ];
}
