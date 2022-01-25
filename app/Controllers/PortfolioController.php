<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dokter;
use App\Models\Portfolio;
use Exception;

class PortfolioController extends BaseController
{
    private Portfolio $portfolio;

    public function __construct()
    {
        $this->portfolio = new Portfolio();
        $this->portfolio->asObject();
    }

    public function index()
    {
        $data['portfolio'] = $this->portfolio->findAll();
        $data['title'] = 'List Portfolio';
		echo view('dashboard/portfolio/index', $data);
    }

    public function new()
    {
        $data['title'] = 'Tambah Portfolio';
		echo view('dashboard/portfolio/create', $data);
    }

    public function store()
    {
        $path = $this->request->getFile('thumbnail')->store();
        $data = [
            'app_name' => $this->request->getPost('app_name'),
            'client_name' => $this->request->getPost('client_name'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'project_date' => $this->request->getPost('project_date'),
            'thumbnail' => $path,
            'slug' => slug($this->request->getPost('app_name'))
        ];

        if (!$this->portfolio->validate($data)) {
            return redirect()->to('/dashboard/portfolio/new')->withInput()->with('errors', $this->portfolio->errors());
        }

        try {
            $this->portfolio->protect(false)->insert($data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/portfolio/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/portfolio/new')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $model = $this->portfolio;
        $data['data'] = $model->where('id', $id)->first();
        $data['title'] = 'Edit Portfolio';
        
        echo view('dashboard/portfolio/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'app_name' => $this->request->getPost('app_name'),
            'client_name' => $this->request->getPost('client_name'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'project_date' => $this->request->getPost('project_date'),
            'slug' => slug($this->request->getPost('app_name'))
        ];

        if (!empty($_FILES['thumbnail']['name'])) {
            $path = $this->request->getFile('thumbnail')->store();
            $data['thumbnail'] = $path;

            try {
                $oldFile = base_url("uploads/" . $this->request->thumbnail_path);
                unlink($oldFile);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        if (!$this->portfolio->validate($data)) {
            return redirect()->to('/dashboard/portfolio/'. $id .'/edit')->withInput()->with('errors', $this->portfolio->errors());
        }

        try {
            $this->portfolio->protect(false)->update($id, $data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/portfolio/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/portfolio/'. $id .'/edit')->with('success', 'Berhasil mengupdate data');
    }
    
    public function delete($id){
        try {
            $this->portfolio->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/portfolio')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/portfolio')->with('success', 'Berhasil menghapus data');
    }
}
