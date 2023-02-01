<?php

$categorie = App\Table\Categorie::find($_GET['id']);
$articles = App\Table\Article::lastByCategory($_GET['id']);
$categories = App\Table\Categorie::all();


?>