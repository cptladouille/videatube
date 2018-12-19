<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>VideaTube</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./ressources/Logo_v_p.png" width="40" height="30" class="d-inline-block align-top" alt="">
            VideaTube
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"> 
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="theme" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Themes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="theme">Voir tout les thèmes</a> 
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="theme-action">Action</a>
                        <a class="dropdown-item" href="aventure_t">Aventure</a>
                        <a class="dropdown-item" href="cuisine_t">Cuisine</a>
                        <a class="dropdown-item" href="beaute_t">Beauté</a>
                        <a class="dropdown-item" href="animaux_t">Animaux</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction='connexion'>Connexion</button>
            </form>
        </div>
    </nav>
    <h1>La meilleure plateforme de vidéastes</h1>
</head>

<body>
<? $content ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>