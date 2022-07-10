<?php

namespace App\Controllers;

use App\Models\LoginUser;

class InicioSesion extends BaseController
{
    public function iniciarSesion()
    {
        $correo = $_POST['email'];
        $pass = $_POST['pass'];

        $login = new LoginUser();
        $usuario = $login->buscarUsuario($correo, $pass);
        if ($usuario) {
            return redirect()->to(base_url('/principal'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
