<?php

namespace App\Models;

use CodeIgniter\Model;

class Galeri extends Model
{
    protected $table      = 'galeri';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['filename_original', 'filename_encrypted'];

    protected $validationRules = [
        'filename_original' => 'required',
        'filename_encrypted' => 'permit_empty',
    ];

    protected $validationMessages = [
        'filename_original' => [
            'required' => 'File harus diupload!'
        ]
    ];
}
