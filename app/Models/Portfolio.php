<?php

namespace App\Models;

use CodeIgniter\Model;

class Portfolio extends Model
{
    protected $table      = 'portfolio';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['app_name', 'category', 'client_name', 'description', 'project_date', 'thumbnail'];

    protected $validationRules = [
        'app_name' => 'required',
        'category' => 'required',
        'client_name' => 'required',
        'description' => 'permit_empty',
        'project_date' => 'required',
    ];

    protected $validationMessages = [
        'app_name' => [
            'required' => 'Nama Portfolio/Projek harus diisi'
        ],
        'category' => [
            'required' => 'Kategori Portfolio harus diisi'
        ],
        'client_name' => [
            'required' => 'Nama client harus diisi'
        ],
        'project_date' => [
            'required' => 'Tanggal Projek tidak boleh kosong'
        ],
    ];
}
