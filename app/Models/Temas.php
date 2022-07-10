<?php

namespace App\Models;

use CodeIgniter\Model;

class Temas extends Model
{
    public function IngresarTema($titulo, $descripcion, $url)
    {
        $tema = [
            "titulo_tema" => $titulo,
            "descripcion_tema" => $descripcion,
            "url_tema" => $url
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('temas');
        $builder->insert($tema);
        return $builder->get()->getResultArray();
    }

    public function BuscarTemas(){
        $db      = \Config\Database::connect();
        $builder = $db->table('temas');
        $builder->select('*');
        return $builder->get()->getResult();
    }
}
