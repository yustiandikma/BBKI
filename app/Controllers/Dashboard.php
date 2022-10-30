<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // echo 'dashboard';
        return view('dashboard/home');
    }
}
