<?php
require_once '../App/Controller/AuthController.php';
require_once '../App/Model/Utilisateur.php';
// require_once '../App/Model/creation_article.php';
require_once '../App/Controller/ArticleController.php';

// $ds = DIRECTORY_SEPARATOR;
// $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds . "BlogPOO". $ds ;
// $file = "{$base_dir}App{$ds}Controller{$ds}AuthController.php";
// require $file;

$controller= new AuthController();


if ($_SERVER["REQUEST_URI"]=="/"){
    $controller -> connexion();
   
}
elseif ($_SERVER["REQUEST_URI"]=="/inscription") {
    $controller -> inscription();
      
}

// $ds = DIRECTORY_SEPARATOR;
// $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds . "BlogPOO". $ds ;
// $file1 = "{$base_dir}App$ds}Controller{$ds}ArticleController.php";
// require $file1;
$controller1= new ArticleController();

if ($_SERVER["REQUEST_URI"]=="/creationArticle") {
    $controller1 -> enregistrer_data();
      
}
elseif ($_SERVER["REQUEST_URI"]=="/articles") {
    $controller1 -> afficher();
      
}
?>