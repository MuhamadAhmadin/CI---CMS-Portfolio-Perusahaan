<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Dokter;
use App\Models\Kamar;
use App\Models\Pasien;

class FrontPageController extends BaseController
{
    /*
    NIM : 190511024
    Nama : Muhamad Ahmadin
    Kelas : K1
    Tanggal : 24 Januari 2022
    */

    public function homepage()
    {
        $user = new User();
        $pasien = new Pasien();
        $dokter = new Dokter();
        $kamar = new Kamar();
        $total_pendapatan = $pasien->get_total_pendapatan()->getResult();
        $data['jumlah_user'] = $user->countAll();
        $data['jumlah_pasien'] = $pasien->countAll();
        $data['jumlah_dokter'] = $dokter->countAll();
        $data['jumlah_kamar'] = $kamar->countAll();
        $data['total_pendapatan'] = $total_pendapatan[0]->total;
        return view('front/homepage', $data);
    }
}
