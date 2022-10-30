<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // echo 'dashboard';

        $data = [
            'title'      => 'Home',
        ];
        return view('dashboard/home', $data);
    }
}
