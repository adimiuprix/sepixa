<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountController extends BaseController
{
    public function dashboard()
    {
        $session = $this->session;

        return view('dashboard', compact('session'));
    }

    public function order()
    {
        $session = $this->session;

        return view('order', compact('session'));
    }

    public function settings()
    {
        $session = $this->session;

        return view('settings', compact('session'));
    }
}
