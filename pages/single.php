<?php

use App\App;

$post = App::getDB()->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);

?>

<h2><?= $post->titre ?></h2>

<p><?= $post->contenu?></p>

