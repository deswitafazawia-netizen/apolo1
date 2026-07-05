<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('login')) {
            return redirect()->to('/login');
        }

        $role = session()->get('role');

        if ($role == 'admin') {
            return view('pages/index');
        }

        if ($role == 'pelanggan') {
            return view('pages/index');
        }

        if ($role == 'photografer') {
            return view('pages/index');
        }

        return redirect()->to('/login');
    }
}