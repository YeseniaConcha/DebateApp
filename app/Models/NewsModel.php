<?php
namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';

    public function getNews($slug = false)
    {
        if ($slug === false) {
            /* Devolver toda la noticia  */
            return $this->findAll();
        }
        /* devolvemos solo una noticia  */
        return $this->where(['slug' => $slug])->first();
    }
}


