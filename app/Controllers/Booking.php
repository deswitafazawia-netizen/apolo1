<?php
namespace App\Controllers;

class Booking extends BaseController
{
    public function index()
    {
        return view('pages/booking');
    }
}