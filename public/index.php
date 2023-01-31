<?php



 require '../app/Autoloader.php';
 require '../app/Database.php';


app\Autoloader::register();

    if(isset($_GET['p']))
    {
        $p = $_GET['p'];
    }
    else 
    {
        //par défaut, la homepage
        $p = 'home';
    }
    // initialisation des objets
    $db = new App\Database('blog_mvc');

  

    //ob-start permet de stocker des variables en PHP
    ob_start();

    if ($p === 'home')
     {
        require '../pages/home.php';
    }
     elseif ($p === 'article')
    {
        require '../pages/single.php';
    }

    $content = ob_get_clean();

    require '../pages/templates/default.php';

