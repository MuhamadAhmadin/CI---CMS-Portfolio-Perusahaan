<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Tim;
use Exception;

class TimController extends BaseController
{
    private Tim $Tim;
    
    public function __construct()
    {
        $this->tim = new Tim();
        $this->tim->asObject();
    }

    public function index()
    {
        $model = $this->tim;
        $data['tim'] = $model->findAll();
        $data['title'] = 'List Tim';
		echo view('dashboard/tim/index', $data);
    }

    public function new()
    {
        $data['title'] = 'Tambah Tim';
		echo view('dashboard/tim/create', $data);
    }

    public function store()
    {
        $path = $this->request->getFile('photo')->store();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'twitter' => $this->request->getPost('twitter'),
            'facebook' => $this->request->getPost('facebook'),
            'instagram' => $this->request->getPost('instagram'),
            'linkedin' => $this->request->getPost('linkedin'),
            'photo' => $path,
        ];

        if (!$this->tim->validate($data)) {
            return redirect()->to('/dashboard/tim/new')->withInput()->with('errors', $this->tim->errors());
        }

        try {
            $this->tim->protect(false)->insert($data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/tim/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/tim/new')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $model = $this->tim;
        $data['data'] = $model->where('id', $id)->first();
        $data['title'] = 'Update Data';
        
        echo view('dashboard/tim/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'twitter' => $this->request->getPost('twitter'),
            'facebook' => $this->request->getPost('facebook'),
            'instagram' => $this->request->getPost('instagram'),
            'linkedin' => $this->request->getPost('linkedin'),
        ];

        if (!empty($_FILES['photo']['name'])) {
            $path = $this->request->getFile('photo')->store();
            $data['photo'] = $path;

            try {
                $oldFile = base_url("uploads/" . $this->request->photo_path);
                unlink($oldFile);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        if (!$this->tim->validate($data)) {
            return redirect()->to('/dashboard/tim/'. $id .'/edit')->withInput()->with('errors', $this->tim->errors());
        }

        try {
            $this->tim->protect(false)->update($id, $data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/tim/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/tim/'. $id .'/edit')->with('success', 'Berhasil mengupdate data');
    }
    
    public function delete($id){
        try {
            $this->tim->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/tim')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/tim')->with('success', 'Berhasil menghapus data');
    }
}
