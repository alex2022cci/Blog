<?php

namespace App\Table;



class Categorie extends Table
{


    public function getURL()
    {
        return 'index.php?p=categorie&id='.$this->id;
    }
}