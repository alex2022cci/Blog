<?php

namespace App\Table;



class Categorie extends Table
{

    protected static $table = 'categories';

    public function getURL()
    {
        return 'index.php?p=categorie&id='.$this->id;
    }
}