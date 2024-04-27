<?php

class CreationArticle
{
    private $db;

    public function __construct()
    {
        $this->db= new PDO("mysql:host=localhost;dbname=dataBlogPoo","root","");
        var_dump($this->db);
        die();
    }

    public function ajouter($categorie,$titre,$description)
    {
        $sql= "insert into articles(categorie,titre,description) values('$categorie','$titre','$description')";
        $this->db->exec($sql);

    }

    public function recuperer()
    {
        // $sql1="select categorie,titre,description from articles where categorie='$categorie',titre='$titre',description='$description'";
        $sql1="SELECT categorie,titre,description from articles order by id desc";
        $stmt=$db->query($sql1);
        if($stmt->rowCount()>0)
        {
            $data=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($data as $article)
            {
                return $article;
                // return ($article['categorie'].$article['titre'].$article['description']);
            }
            
        }
        return $article;

        
    }
    
}