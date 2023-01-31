<?php

namespace App\Table;

class Article
{
    public function getURL()
    {
        return 'index.php?p=article&id='.$this->id;
    }

    public function getExtrait()
    {
        return $this->contenu;
    }
} 