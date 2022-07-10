<?php

namespace App\Controllers;

use App\Models\Comentarios;
use App\Models\Temas;

class Tema extends BaseController
{

    public function principal()
    {
        $Read = new Temas();
        $temas = $Read->BuscarTemas();
        $Read = new Comentarios();
        $comentarios = $Read->Buscarcomentarios();
        $datosTemas = [
            "temas"=> $temas,
            "comentarios"=> $comentarios
        ];



        return view('templates/header2')
            . view('pages/principal',$datosTemas)
            . view('templates/modal')
            . view('templates/footer');
    }


    public function IngresarTema()
    {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $url = $_POST['url'];

        $Read = new Temas();
        $ingresoDeDatos = $Read->IngresarTema($titulo, $descripcion, $url);

        return redirect()->to(base_url('/principal'));
    }

    public function IngresarComentario(){
        $id_tema = $_POST['id_tema'];
        $comentario = $_POST['comentario'];
        $Read = new Comentarios();
        $ingresoDeDatos = $Read->IngresarComentario($id_tema,$comentario);
        return redirect()->to(base_url('/principal'));
    }


}
