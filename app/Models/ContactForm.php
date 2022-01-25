<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactForm extends Model
{
    protected $table      = 'contact_form';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'subject', 'email', 'message'];

    protected $validationRules = [
        'name' => 'required',
        'subject' => 'required',
        'email' => 'required',
        'message' => 'required',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Nama harus diisi'
        ],
        'subject' => [
            'required' => 'Subjek harus diisi'
        ],
        'email' => [
            'required' => 'Email harus diisi'
        ],
        'message' => [
            'required' => 'Pesan harus diisi'
        ],
    ];
}
