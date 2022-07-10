<?php

namespace App\Models;


use CodeIgniter\Model;

class Comentarios extends Model
{

    public function ingresarComentario($id_tema,$comentario)
    {
        $comentarios= [
            "id_tema"=>$id_tema,
            "descripcion_comentario"=>$comentario
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('comentario');
        $builder->insert($comentarios);
        return $builder->get()->getResultArray();



    }


    public function Buscarcomentarios()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('comentario');
        $builder->select('*');
        return $builder->get()->getResult();
    }
}
