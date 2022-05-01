<?php

namespace App\Controllers;

class AdminHome extends BaseController
{
    public function index()
    {
        return view('admin/view_home');
    }
}
