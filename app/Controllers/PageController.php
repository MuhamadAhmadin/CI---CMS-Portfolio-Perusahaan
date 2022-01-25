<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Client;
use App\Models\User;
use App\Models\Freelancer;
use App\Models\Event;
use App\Models\Skill;
use App\Models\Company;
use App\Models\ContactForm;
use App\Models\Dokter;
use App\Models\Kamar;
use App\Models\Loker;
use App\Models\Pasien;
use App\Models\Portfolio;
use App\Models\Tim;

class PageController extends BaseController
{
    /*
    NIM : 190511024
    Nama : Muhamad Ahmadin
    Kelas : K1
    Tanggal : 19 Desember 2021
    */

    public function index()
    {
        $user = new User();
        $portfolio = new Portfolio();
        $client = new Client();
        $tim = new Tim();
        $contact_form = new ContactForm();
        $data['jumlah_user'] = $user->countAll();
        $data['jumlah_portfolio'] = $portfolio->countAll();
        $data['jumlah_client'] = $client->countAll();
        $data['jumlah_tim'] = $tim->countAll();
        $data['jumlah_contact_form'] = $contact_form->countAll();
        return view('dashboard/index', $data);
    }
}
