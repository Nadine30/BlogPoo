<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../css/connexion.css">
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
    <div class="container image">
        <div class="row align-items-center m-5">
            <div class="col-md-6">
                <h3 class="text-primary"> Confidence </h3>
                <h5>Rejoins Notre communauté et confie toi sans etre jugé par Ken.</h5>

            </div>
            <div class="col-md-4">
                <form action="" method="POST" class="border boredr-3 rounded rounded-3 shadow-lg p-3 my-5">
                    <input type="email" id="email" name="emailUtilisateur" placeholder="Adresse e-mail" class="form-control">
                    <br>
                    <input type="password" id="password" name="MotDePasse" placeholder="Mot De Passe" class="form-control">
                    <br>
                    <input type="submit" value="Se connecter" class="btn btn-primary">
                    <hr>
                    <button class="btn btn-success">
                        <a href="/inscription" class="text-decoration-none text-light"> Creer nouveau compte </a>
                    </button>
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>