<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kamar;
use Exception;

class KamarController extends BaseController
{
    private Kamar $kamar;
    
    public function __construct()
    {
        $this->kamar = new Kamar();
        $this->kamar->asObject();
    }

    public function index()
    {
        $model = $this->kamar;
        $data['kamar'] = $model->findAll();
        $data['title'] = 'List Kamar';
		echo view('dashboard/kamar/index', $data);
    }

    public function new()
    {
        $data['title'] = 'Tambah Kamar';
		echo view('dashboard/kamar/create', $data);
    }

    public function store()
    {
        $visible = ($this->request->getPost('visible')) ? 1 : 0;
        $data = [
            'no_kamar' => $this->request->getPost('no_kamar'),
            'lantai' => $this->request->getPost('lantai'),
            'max_orang' => $this->request->getPost('max_orang'),
            'kelas' => $this->request->getPost('kelas'),
        ];

        if (!$this->kamar->validate($data)) {
            return redirect()->to('/dashboard/kamar/new')->withInput()->with('errors', $this->kamar->errors());
        }

        try {
            $this->kamar->protect(false)->insert($data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/kamar/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/kamar/new')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $model = $this->kamar;
        $data['data'] = $model->where('id', $id)->first();
        $data['title'] = 'Update Data';
        
        echo view('dashboard/kamar/edit', $data);
    }

    public function update($id)
    {
        $visible = ($this->request->getPost('visible')) ? 1 : 0;
        $data = [
            'no_kamar' => $this->request->getPost('no_kamar'),
            'lantai' => $this->request->getPost('lantai'),
            'max_orang' => $this->request->getPost('max_orang'),
            'kelas' => $this->request->getPost('kelas'),
        ];

        if (!$this->kamar->validate($data)) {
            return redirect()->to('/dashboard/kamar/'. $id .'/edit')->withInput()->with('errors', $this->kamar->errors());
        }

        try {
            $this->kamar->protect(false)->update($id, $data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/kamar/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/kamar/'. $id .'/edit')->with('success', 'Berhasil mengupdate data');
    }
    
    public function delete($id){
        try {
            $this->kamar->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/kamar')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/kamar')->with('success', 'Berhasil menghapus data');
    }
}
