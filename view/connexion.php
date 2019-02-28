<?php $title = 'Connexion';
ob_start();?>
<div class="bodyConnexion">
<div class="container">
<?php if(isset($_POST['alert']))
    { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erreur !</strong> <?= $_POST['alert']; ?>
            <button  type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="return getOutput();">
                <span aria-hidden="true">&times;</span>
            </button>

    </div>

    <?php }
    if(isset($_POST['info'])) 
    { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Info !</strong> <?= $_POST['info']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="return getOutput();">
                <span aria-hidden="true">&times;</span>
            </button>

    </div>

    <?php } ?>
    <div class="row">
        <div class="formulaire connexionForm">
            <h1 class="titleConnexion">CONNECTEZ VOUS !</h1>
            <div class="containImgFormConnexion">
                <i class="fas fa-vial imgFormConnexion" ></i>
            </div>
            <form method="post" action="connexion">
                <div class="formulaireChamps ">
                    <label class="labelFormConnexion labLogin " for="Login">Login :</label>
                </div>
                <div>
                    <input type="text" class="form-control formulaireInput" name="login" placeholder="Login"/>
                </div>
                <br>
                <div class="formulaireChamps">
                    <label class="labelFormConnexion " for="MotDePasse">Mot de Passe :</label>
                </div>
                <div class="inputMdpConnexion">
                    <input type="password" class="form-control formulaireInput " name="mdp" placeholder="Mot de passe"/>
                </div>

                <a class ="linkFormConnexion " href="">Mot de passe oublié ?</a>
                <br>
                <a class ="linkFormConnexion" href="">Login oublié ?</a>
                <div>
                    <input type="submit" class="btn BoutonConnexion" value="Se connecter" name="formConnexion">
                </div>
            </form>
            <form action="inscription">
                <input type="submit" class="btn BoutonInscription" formaction='inscription' value="S'inscrire"/>
            </form>
        </div>

    </div>
    </div>
</div>



<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
