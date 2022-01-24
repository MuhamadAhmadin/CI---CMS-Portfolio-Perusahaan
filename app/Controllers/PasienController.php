<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dokter;
use App\Models\Pasien;
use Exception;

class PasienController extends BaseController
{
    private Pasien $Pasien;

    public function __construct()
    {
        $this->pasien = new Pasien();
        $this->pasien->asObject();
    }

    public function index()
    {
        $data['pasien'] = $this->pasien->get_data();
        $data['title'] = 'List Pasien';
		echo view('dashboard/pasien/index', $data);
    }

    public function new()
    {
        $dokter = new Dokter();
        $data['title'] = 'Tambah Pasien';
        $data['dokter'] = $dokter->findAll();
		echo view('dashboard/pasien/create', $data);
    }

    public function store()
    {
        $data = [
            'no_pasien' => $this->request->getPost('no_pasien'),
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'keluhan' => $this->request->getPost('keluhan'),
            'tanggal_datang' => $this->request->getPost('tanggal_datang'),
            'harga_jasa' => $this->request->getPost('harga_jasa'),
            'dokter_id' => $this->request->getPost('dokter_id'),
        ];

        if (!$this->pasien->validate($data)) {
            return redirect()->to('/dashboard/pasien/new')->withInput()->with('errors', $this->pasien->errors());
        }

        try {
            $this->pasien->protect(false)->insert($data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/pasien/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/pasien/new')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $model = $this->pasien;
        $data['data'] = $model->where('id', $id)->first();
        $dokter = new Dokter();
        $data['title'] = 'Edit Pasien';
        $data['dokter'] = $dokter->findAll();
        
        echo view('dashboard/pasien/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'no_pasien' => $this->request->getPost('no_pasien'),
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'keluhan' => $this->request->getPost('keluhan'),
            'tanggal_datang' => $this->request->getPost('tanggal_datang'),
            'harga_jasa' => $this->request->getPost('harga_jasa'),
            'dokter_id' => $this->request->getPost('dokter_id'),
        ];

        if (!$this->pasien->validate($data)) {
            return redirect()->to('/dashboard/pasien/'. $id .'/edit')->withInput()->with('errors', $this->pasien->errors());
        }

        try {
            $this->pasien->protect(false)->update($id, $data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/pasien/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/pasien/'. $id .'/edit')->with('success', 'Berhasil mengupdate data');
    }
    
    public function delete($id){
        try {
            $this->pasien->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/pasien')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/pasien')->with('success', 'Berhasil menghapus data');
    }
}
