<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('v_login');
    }
}
