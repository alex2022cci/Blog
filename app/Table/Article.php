<?php

namespace App\Table;

use App\App;
use App\Table\Table;


class Article extends Table
{
    public static function getLast()
    {
        return App::getDB()->query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie  FROM articles
        LEFT JOIN categories
         ON category_id = categories.id", __CLASS__);
    }

    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public static function lastByCategory($category_id)
    {
        return App::getDB()->prepare("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie  FROM articles
        LEFT JOIN categories
         ON category_id = categories.id
         WHERE category_id = ?
         
         
         ", [$category_id] ,__CLASS__);
    }


    public function getURL()
    {
        return 'index.php?p=article&id='.$this->id;
    }

    public function getExtrait()
    {
        $html  = '<p>'.substr($this->contenu, 0, 50).'...</p>';
        $html .= '<p><a href="'.$this->getURL().'">Voir la suite</a></p>';
        return $html;

    }
} 