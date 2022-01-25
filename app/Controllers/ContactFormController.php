<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactForm;
use Exception;

class ContactFormController extends BaseController
{
    private ContactForm $contactForm;
    
    public function __construct()
    {
        $this->contactForm = new ContactForm();
        $this->contactForm->asObject();
    }

    public function index()
    {
        $model = $this->contactForm;
        $data['contactForm'] = $model->findAll();
        $data['title'] = 'List Data Dari Form Kontak';
		echo view('dashboard/contact_form/index', $data);
    }

    public function store()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'subject' => $this->request->getPost('subject'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
        ];

        if (!$this->contactForm->validate($data)) {
            return redirect()->to('/')->withInput()->with('errors', $this->contactForm->errors());
        }

        try {
            $this->contactForm->protect(false)->insert($data);
        } catch (Exception $e) {
            return redirect()->to('/')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/')->with('success', 'Terimakasih sudah mengirimkan pesan, kami akan segera membaca pesan anda.');
    }

    
    public function delete($id){
        try {
            $this->contactForm->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/contact_form')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/contact_form')->with('success', 'Berhasil menghapus data');
    }
}
