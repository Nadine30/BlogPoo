<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title> Mon Article </title>

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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h3 class="my-5"> Parlez de ce qui vous passionne, à votre manière</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="" method="POST" class="border border-3 rounded rounded-3 shadow-lg my-3 p-3">
                    <select name="categorieArticle" id="categorie" class="form-control" >
                        <option value="Amour"> Amour </option>
                        <option value="Religion"> Religion</option>
                        <option value="Musique"> Musique </option>
                        <option value="Famille"> Famille </option>
                        <option value="Metier"> Metier </option>
                        <option value="Bien etre"> Bien-etre </option>

                    </select>
                    <br>
                    <input type="text" id="titre" name="TitreArticle" placeholder="Titre" class="form-control">
                    <br>
                    <textarea name="DescriptionArticle" id="description" cols="30" rows="7" placeholder="Description" class="form-control"></textarea>
                    <br>
                    <input type="submit" value="Poster" class="btn btn-primary">
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>