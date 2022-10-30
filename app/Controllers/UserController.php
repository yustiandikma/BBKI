<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle'      => 'Home',
        ];

        return view('dashboard/home', $data);
    }

    public function impor()
    {
        $data = [
            'pageTitle'     => 'Impor',
        ];

        return view('dashboard/impor', $data);
    }

    public function ekspor()
    {
        $data = [
            'pageTitle'     => 'Ekspor',
        ];
        return view('dashboard/ekspor', $data);
    }

    public function domestikMasuk()
    {
        $data = [
            'pageTitle'     => 'Domestik Masuk',
        ];
        return view('dashboard/domestikMasuk', $data);
    }

    public function domestikKeluar()
    {
        $data = [
            'pageTitle'     => 'Domestik Keluar',
        ];
        return view('dashboard/domestikKeluar', $data);
    }
}
