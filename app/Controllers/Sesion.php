<?php
namespace App\Controllers;
class Sesion extends BaseController{
    public function login(){
        return view('pages/login');
    }

    public function registrar(){
        return view('pages/registro');
    }



}