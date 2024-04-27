<?php

class Utilisateur
{
    private $db; 

   public function __construct()
   {
    $this->db = new PDO("mysql:host=localhost;dbname=dataBlogPoo","root","");
   } 

   public function create($nom, $email, $mdp)
   {
    $sql="insert into Utilisateurs(nom,email,mdp) values ('$nom','$email','$mdp')";
    $this->db->exec($sql);

   }

   public function search($email)
   {
    $sql1="SELECT email from Utilisateurs where email='$email'";
    $stmt=$this->db -> query($sql1);
    if ($stmt -> rowCount()>0)
    {
        return True; 
    }
   }

   public function verify($mdp,$email)
   {
    $sql2="SELECT mdp from Utilisateurs where email='$email'";
    $stmt=$this->db->query($sql2);
    $pwd=$stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($pwd);
    $hashpwd= $pwd[0]['mdp'];

    if (password_verify($mdp,$hashpwd))
    {
       return True;
    }
        
   }

}