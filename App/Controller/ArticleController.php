<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
$file = "{$base_dir}Model{$ds}creation_article.php";
require $file;

class ArticleController
{
    protected $article;

    public function _construct()
    {
        $this->article= new CreationArticle();
        
    }

    public function enregistrer_data()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}creationArticle.php";
        include($file);
        
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $categorie=$_POST["categorieArticle"];
            $titre=$_POST["TitreArticle"];
            $description=$_POST["DescriptionArticle"];

            if($this->article->ajouter($categorie,$titre,$description)) 
            // if( $this->article->récupérer($categorie,$titre,$description))
            {
                header("location:/articles");
            }     
           
        }
    }

    public function afficher()
     {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}articles.php";
        include($file);
        if($this->article->recuperer())
         {
            echo"<h3> $article->categorie </h3>";
            echo "<h5> $article->titre </h5>";
            echo " $article->description  <br> <hr>";
         }
        }

}