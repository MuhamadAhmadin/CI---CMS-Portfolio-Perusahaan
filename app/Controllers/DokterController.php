<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dokter;
use Exception;

class DokterController extends BaseController
{
    private Dokter $Dokter;
    
    public function __construct()
    {
        $this->dokter = new Dokter();
        $this->dokter->asObject();
    }

    public function index()
    {
        $model = $this->dokter;
        $data['dokter'] = $model->findAll();
        $data['title'] = 'List Dokter';
		echo view('dashboard/dokter/index', $data);
    }

    public function new()
    {
        $data['title'] = 'Tambah Dokter';
		echo view('dashboard/dokter/create', $data);
    }

    public function store()
    {
        $visible = ($this->request->getPost('visible')) ? 1 : 0;
        $data = [
            'kode_dokter' => $this->request->getPost('kode_dokter'),
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        if (!$this->dokter->validate($data)) {
            return redirect()->to('/dashboard/dokter/new')->withInput()->with('errors', $this->dokter->errors());
        }

        try {
            $this->dokter->protect(false)->insert($data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/dokter/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/dokter/new')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $model = $this->dokter;
        $data['data'] = $model->where('id', $id)->first();
        $data['title'] = 'Update Data';
        
        echo view('dashboard/dokter/edit', $data);
    }

    public function update($id)
    {
        $visible = ($this->request->getPost('visible')) ? 1 : 0;
        $data = [
            'kode_dokter' => $this->request->getPost('kode_dokter'),
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        if (!$this->dokter->validate($data)) {
            return redirect()->to('/dashboard/dokter/'. $id .'/edit')->withInput()->with('errors', $this->dokter->errors());
        }

        try {
            $this->dokter->protect(false)->update($id, $data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/dokter/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/dokter/'. $id .'/edit')->with('success', 'Berhasil mengupdate data');
    }
    
    public function delete($id){
        try {
            $this->dokter->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/dokter')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/dokter')->with('success', 'Berhasil menghapus data');
    }
}
