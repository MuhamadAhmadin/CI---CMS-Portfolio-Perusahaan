<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Galeri;
use Exception;

class GaleriController extends BaseController
{
    private Galeri $galeri;
    
    public function __construct()
    {
        $this->galeri = new Galeri();
        $this->galeri->asObject();
    }

    public function index()
    {
        $model = $this->galeri;
        $data['galeri'] = $model->findAll();
        $data['title'] = 'List Galeri';
		echo view('dashboard/galeri/index', $data);
    }

    public function new()
    {
        $data['title'] = 'Tambah Galeri';
		echo view('dashboard/galeri/create', $data);
    }

    public function store()
    {
        $validationRule = ([
            'file' => 'uploaded[file]|is_image[file]|mime_in[file,image/png,image/jpeg,image/jpg]|max_size[file,2048]',
        ]);

        if (!$this->validate($validationRule)) {
            $data = [
                'errors' => $this->validator->getErrors(),
                'title' => 'Tambah Galeri'
            ];

            return view('dashboard/galeri/create', $data);
        }

        try {
            $name = $this->request->getFile('file')->getName();
            $path = $this->request->getFile('file')->store();

            $this->galeri->insert([
                'filename_original' => $name,
                'filename_encrypted' => $path,
            ]);
        } catch (\Exception $th) {
            return redirect()->to('dashboard/galeri/new')->with('errors', ['Gagal mengupload file: ' . $th->getMessage()]);
        }

        return redirect()->to('dashboard/galeri/new')->with('success', 'File berhasil diupload');
    }
    
    public function delete($id){
        try {
            $this->galeri->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/galeri')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/galeri')->with('success', 'Berhasil menghapus data');
    }
}
