<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title> Les Articles </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <title> Mon Blog </title>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <button class="btn btn-warning m-3">
                    <a href="/creationArticle" class="text-decoration-none text-light"> Creer votre article </a>
                </button>
            </div>
        </div>      
    </div>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h3 class="text-success"> Réligion </h3>
                <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum vero, voluptate eum veniam excepturi nobis?</h5>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laboriosam nisi quisquam? Modi repellat 
                    eaque nihil consectetur dolorem voluptate, nemo, impedit laborum eos magnam quod nesciunt 
                    tempore! Voluptatem dolor optio nisi amet, maiores voluptatum consequuntur modi ipsa recusandae aliquid cum!
                </p>
                <hr>
                <h3 class="text-danger"> Musique </h3>
                <h5> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel corrupti neque deleniti quod, incidunt aliquid?</h5>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum numquam iure optio iusto temporibus pariatur odit molestias id magni,
                    illo accusamus ut ad nisi fugiat nihil vel dolor.
                    Earum eum temporibus beatae eveniet et! Eaque nostrum molestias asperiores dolor quod!
                </p>
                <hr>
                <h3 class="text-info"> Bien-etre </h3>
                <h5> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis alias praesentium exercitationem ea architecto! Harum.</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos iure voluptates veniam nam facilis ab cumque, tempora 
                    quod placeat illo sed natus ipsam sint molestias labore dolor repellat voluptas
                    voluptatum dolores dolore, temporibus hic. Rem eveniet distinctio modi magnam odio.
                </p>
                <hr>
                <!-- <?php
                try{
                    $db= new PDO ("mysql:host=localhost;dbname=dataBlog","root","");
                    // $titre=$_POST["TitreArticle"];
                    // $description=$_POST["DescriptionArticle"];
                    $sql="select * from Article";
                    // $sql="select titre,description from Utilisateurs where titre='$titre' and description='$description'";
                    $stmt=$db->query($sql);
                    $data=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($data as $article){
                        echo"<h3> $article->categorie </h3>";
                        echo "<h5> $article->titre </h5>";
                        echo " $article->description  <br> <hr>";}
                }
                catch (Exception $e) {
                    echo "Echec de connexion";
                }
                ?> -->
                

                
                <!-- <?php
                echo $_POST["TitreArticle"];
                echo $description;
                ?> -->



            </div>
            
                
                
                    

            
        </div>
    </div>
    
</body>
</html>