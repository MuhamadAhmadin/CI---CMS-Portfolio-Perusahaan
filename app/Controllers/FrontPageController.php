<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Client;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Pasien;
use App\Models\Portfolio;
use App\Models\Tim;

class FrontPageController extends BaseController
{
    /*
    NIM : 190511024
    Nama : Muhamad Ahmadin
    Kelas : K1
    Tanggal : 24 Januari 2022
    */

    private Portfolio $portfolio;

    public function __construct()
    {
        $this->portfolio = new Portfolio();
        $this->portfolio->asObject();
    }

    public function homepage()
    {
        $client = new Client();
        $portfolio = new Portfolio();
        $tim = new Tim();

        $data['clients'] = $client->asObject()->findAll();
        $data['portfolios'] = $portfolio->asObject()->findAll();

        return view('front/homepage', $data);
    }

    public function portfolio_detail($slug)
    {
        $model = $this->portfolio;
        $data['data'] = $model->where('slug', $slug)->first();
        $data['title'] = 'Detail Portfolio';

        return view('front/portfolio_detail', $data);

    }
}
