<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Freelancer;
use App\Models\Event;
use App\Models\Skill;
use App\Models\Company;
use App\Models\Dokter;
use App\Models\Kamar;
use App\Models\Loker;
use App\Models\Pasien;

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
        $pasien = new Pasien();
        $dokter = new Dokter();
        $kamar = new Kamar();
        $total_pendapatan = $pasien->get_total_pendapatan()->getResult();
        // dd($total_pendapatan);
        $data['jumlah_user'] = $user->countAll();
        $data['jumlah_pasien'] = $pasien->countAll();
        $data['jumlah_dokter'] = $dokter->countAll();
        $data['jumlah_kamar'] = $kamar->countAll();
        $data['total_pendapatan'] = $total_pendapatan[0]->total;
        // dd($data);
        return view('dashboard/index', $data);
    }
}
