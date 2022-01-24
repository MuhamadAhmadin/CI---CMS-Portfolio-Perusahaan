<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Client;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Pasien;
use App\Models\Tim;

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
        $client = new Client();
        $user = new User();
        $pasien = new Pasien();
        // $tim = new Tim();
        $kamar = new Kamar();
        $total_pendapatan = $pasien->get_total_pendapatan()->getResult();
        $data['jumlah_user'] = $user->countAll();
        $data['jumlah_pasien'] = $pasien->countAll();
        // $data['jumlah_tim'] = $tim->countAll();
        $data['jumlah_kamar'] = $kamar->countAll();
        $data['total_pendapatan'] = $total_pendapatan[0]->total;

        $data['clients'] = $client->asObject()->findAll();

        return view('front/homepage', $data);
    }
}
