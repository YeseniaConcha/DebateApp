<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/header')
        . view('pages/index')
        . view('templates/footer');
    }

    public function saludar(){
        echo "Mi primer metodo en PHP";
    }
}
