<?php 

namespace App\HTTP\Controllers;

class HomeController
{
    public function index()
    {
        return view("home");
    }
}