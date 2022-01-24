<?php

namespace App\Models;

use CodeIgniter\Model;

class Pasien extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['no_pasien', 'nik', 'nama', 'gender', 'alamat', 'telepon', 'keluhan', 'tanggal_datang', 'harga_jasa', 'dokter_id'];

    protected $validationRules = [
        'no_pasien' => 'required',
        'nik' => 'required',
        'nama' => 'required',
        'gender' => 'permit_empty',
        'alamat' => 'required',
        'telepon' => 'required',
        'keluhan' => 'required',
        'tanggal_datang' => 'required',
        'dokter_id' => 'required',
    ];

    protected $validationMessages = [
        'no_pasien' => [
            'required' => 'No Pasien harus diisi'
        ],
        'nik' => [
            'required' => 'NIK harus diisi'
        ],
        'nama' => [
            'required' => 'Nama Pasien harus diisi'
        ],
        'gender' => [
            'required' => 'Gender tidak boleh kosong'
        ],
        'alamat' => [
            'required' => 'alamat pasien tidak boleh kosong'
        ],
        'telepon' => [
            'required' => 'No Telepon tidak boleh kosong'
        ],
        'keluhan' => [
            'required' => 'Keluhan tidak boleh kosong'
        ],
        'tanggal_datang' => [
            'required' => 'Tanggal Datang/Berobat tidak boleh kosong'
        ],
        'dokter_id' => [
            'required' => 'Dokter yang menangani harus dipilih'
        ]
    ];

    public function get_data()
    {
    	return $this->db->table($this->table)
	    	->join('dokter', 'dokter.id = '.$this->table.'.dokter_id', 'left')
            ->select('pasien.*, dokter.nama AS nama_dokter')
	    	->orderBy($this->table.'.id', 'desc')->get()->getResultObject();
    }

    public function get_total_pendapatan()
    {
        return $this->db->query('SELECT SUM(harga_jasa) AS total FROM pasien');
    }
}
