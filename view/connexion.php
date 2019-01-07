<?php $title = 'Connexion';
ob_start();?>
<div class="container">
    <div class="row">
        <div class="formulaire">
            <h1>CONNECTEZ VOUS !</h1>
            <form method="post" action="connexion">
                <div class="formulaireChamps">
                    <label for="Login">Login :</label>
                </div>
                <div>
                    <input type="text" class="form-control formulaireInput" name="login" placeholder="Login"/>
                </div>
                <br>
                <div class="formulaireChamps">
                    <label for="MotDePasse">Mot de Passe :</label>
                </div>
                <div>
                    <input type="password" class="form-control formulaireInput" name="mdp" placeholder="Mot de passe"/>
                </div>
                <?php 
                    if(isset($_SESSION['userConnected']))
                    {?>
                        <div class = "alert"><label><?= 'Vous etes connecté en tant que '. $_SESSION['userConnected']['nickname'] .' !' ?></label></div>
                    <?php 
                    }
                    elseif (isset($_POST['alert']))
                    {?>
                        <div class = "alert"><label><?= $_POST['alert']?></label></div>
                    <?php
                    }
                ?>
                <br>
                <div>
                    <input type="submit" class="btn BoutonForm" value="Se connecter" name="formConnexion">
                </div>
                <br>
            </form>
            <form action="inscription">
                <input type="submit" class="btn BoutonFormInscription" formaction='inscription' value="S'inscrire"/>
            </form>
        </div>

    </div>
</div>
<?php $content = ob_get_clean();
require_once('view/template.php'); ?>

<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <object class="videoCarousel" data="<?= $data[3] ?>"></object>

                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>

            <div class="item">
                <object class="videoCarousel" data="<?= $data[2] ?>"></object>
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>

            <div class="item">
                <object class="videoCarousel" data="<?= $data[1] ?>"></object>
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beautiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>

            <div class="item">
                <object class="videoCarousel" data="<?= $data[0] ?>"></object>
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beautiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>

        </div>