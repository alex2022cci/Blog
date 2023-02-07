<?php

use App\App;
use App\Table\Categorie;
use App\Table\Article;

$post = Article::find($_GET['id']);
if($post === false)
{
    App::notFound();
}

App::setTitle($post->titre);


/*$post = App::getDB()->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);*/

?>

<h2><?= $post->titre ?></h2>

<p><em><?= $post->categorie ?></em></p>

<p><?= $post->contenu?></p>

