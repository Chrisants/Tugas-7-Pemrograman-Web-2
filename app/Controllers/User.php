<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

// Christian Santoso 23.240.0005
class User extends BaseController
{
    public function index()
    {
        //
        return view('login/v_login');
    }
}