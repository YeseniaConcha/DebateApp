<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class LoginUser extends Model
{
    public function buscarUsuario($correo,$pass)
    {  
      
        $db      = \Config\Database::connect();
        $builder = $db->table('usuarios');
        $builder-> select('id_usuario');
        $builder->where("correo",$correo);
        $builder->where("pass_usuario",$pass);
        return $builder->get()->getResultArray();
    }
}
