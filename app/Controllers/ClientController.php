<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Client;
use Exception;

class ClientController extends BaseController
{
    private Client $client;
    
    public function __construct()
    {
        $this->client = new Client();
        $this->client->asObject();
    }

    public function index()
    {
        $model = $this->client;
        $data['client'] = $model->findAll();
        $data['title'] = 'List Client';
		echo view('dashboard/client/index', $data);
    }

    public function new()
    {
        $data['title'] = 'Tambah Client';
		echo view('dashboard/client/create', $data);
    }

    public function store()
    {
        $validationRule = ([
            'file' => 'uploaded[file]|is_image[file]|mime_in[file,image/png,image/jpeg,image/jpg]|max_size[file,2048]',
        ]);

        if (!$this->validate($validationRule)) {
            $data = [
                'errors' => $this->validator->getErrors(),
                'title' => 'Tambah Client'
            ];

            return view('dashboard/client/create', $data);
        }

        try {
            $name = $this->request->getFile('file')->getName();
            $path = $this->request->getFile('file')->store();

            $this->client->insert([
                'filename_original' => $name,
                'filename_encrypted' => $path,
            ]);
        } catch (\Exception $th) {
            return redirect()->to('dashboard/client/new')->with('errors', ['Gagal mengupload file: ' . $th->getMessage()]);
        }

        return redirect()->to('dashboard/client/new')->with('success', 'File berhasil diupload');
    }
    
    public function delete($id){
        try {
            $this->client->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/client')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/client')->with('success', 'Berhasil menghapus data');
    }
}
