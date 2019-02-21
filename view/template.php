<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <meta charset="utf-8"/>
    <title>VideaTube</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href=" ./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href=" ./assets/css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home">
        <i class="fas fa-vial d-inline-block align-top" width="40" height="40"></i>
            VideaTube
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <table class="navbar-nav mr-auto">
                <tr>
                <td class="nav-item active">
                    <a class="nav-link" href="home">Home<span class="sr-only">(current)</span></a>
                </td>
                    <td class="nav-item active">
                    <?php if (isset($_SESSION['userConnected'])){ ?>
                            <a class="nav-link" href="upload">Mettre en ligne une vidéo</a>
                    <?php } ?>
                    </td>
                </tr>
            </table>
            <?php
            if(!isset($_POST['search']))
            { ?>
            <form class="searchTemp" method = 'post' action ='search'>
                <div class="search__wrapper">
                    <input type="text" name="search" placeholder="Tapez votre recherche..." class="search__field">
                    <button type="submit" class="fa fa-search search__icon"></button>
                </div>
            </form>
            <?php } ?> 


            <table class="navbar-nav navbar-right">
                <tr>
                    <?php
                    if (isset($_SESSION['userConnected']))
                    {
                        if($_SESSION['userConnected']['avatar'] != "")
                        {?>
                            <td class="divProfilNavBar">
                            <a  href= "profil" class="">
                                <img src="./ressources/avatars/<?= $_SESSION['userConnected']['avatar']; ?>" class="d-inline-block align-top avatarNavBar" alt="" width="40px"
                                height="40px">
                            </a>
                            </td>
                            <?php
                        }?>
                        <td>
                        <a  href= "profil"><p class = "my-2 my-sm-0 nameNavBar" href = "profil">
                                <?= $_SESSION['userConnected']['nickname'] ;?></p>
                        </a>
                        </td>
                        <td class="divDecoNavBar">
                            <form method = 'post' action ='connexion'>
                            <input class="btn  my-2 my-sm-0 BoutonHomeDeconnexion" type="submit" name = "deconnexion" value = 'Déconnexion'>

                            </form>
                        </td>
                        <?php
                    }
                    else
                    {?>
                        <td>
                        <form method = 'post' action ='connexion'>
                            <input class="btn  my-2 my-sm-0 BoutonHome" type="submit" name = "connexion" value = 'Connexion'>
                        </form>
                        </td>
                        <?php
                    }
                    ?>
                </tr>
            </table>
        </div>
    </nav>
    </div>
</head>

<body>
<?= $content;?>
</body>
<footer class="py-3 bg-dark footer">
    <div class="container">

        <p class="m-0 text-center text-white">Copyright &copy; VideaTube 2018  -- <a href="condition">CGU</a> </p>
    </div>
    <!-- /.container -->
</footer>
</html>