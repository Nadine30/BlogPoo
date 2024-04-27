<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
$file = "{$base_dir}Model{$ds}Utilisateur.php";
require $file;

class AuthController
{
    protected $user;

    public function __construct()
    {
        $this->user = new Utilisateur(); 
    }

    public function connexion()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}connexion.php";
        include($file);
        
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $email=$_POST["emailUtilisateur"];
            $mdp=$_POST["MotDePasse"];

            if ($this->user->search($email) && $this->user->verify($mdp,$email))
           {
            header("Location:/articles");
           }
           else{
            echo "<div class='alert alert-danger'> Informations incorrectes !</div>";
           }

        }

    }

    public function inscription()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}inscription.php";
        include($file);


        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $nom=$_POST["nomUtilisateur"];
            $email=$_POST["emailUtilisateur"];
            $pwd1=password_hash($_POST["password1"],PASSWORD_DEFAULT);
            $pwd2=password_hash($_POST["password2"],PASSWORD_DEFAULT);

            
            if ($this->user->search($email))
            {
                echo "<div class='alert alert-danger'> Ce compte existe déja !</div>";
                die();
            }
           

           if ($_POST["password1"]!=$_POST["password2"])
           {
            echo "<div class='alert alert-danger'> Mot de passe incorrect !</div>";
           }
           else{
            $this->user->create($nom,$email,$pwd1);
           header("Location:/");
           }

        }

    }

    function Bienvenue()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds ;
        $file = "{$base_dir}Vue{$ds}connexion.php";
        include($file);

    }

}
