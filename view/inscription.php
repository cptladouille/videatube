<?php $title = 'Inscription';
ob_start(); ?>
<html>
<div class="container">
    <div class="row">
        <div class="col-lg-8 formulaireInscription">
            <div>
                <h1 class="titleInscription">INSCRIVEZ VOUS!</h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 colonne">
                    <form method="post" action="inscription">
                        <div>
                            <label class="lab" for="Nom">Nom :</label>
                        </div>
                        <div>
                            <input type="text" name="nom" class="form-control" placeholder="Nom"/>
                        </div>
                        <br>
                        <div>
                            <label class="lab" for="Prenom">Prenom :</label>
                        </div>
                        <div>
                            <input type="text" name="prenom" class="form-control" placeholder="Prenom"/>
                        </div>
                        <br>
                        <div>
                            <label class="lab" for="Mail">Mail :</label>
                        </div>
                        <div>
                            <input type="text" name="mail" class="form-control inscriptionInputMail" placeholder="Mail"/>
                        </div>
                        <br>
                        <div>
                            <label class="labPseudo" for="Pseudo">Pseudo :</label>
                        </div>
                        <div>
                            <input type="text" name="pseudo" class="form-control inscriptionInputPseudo " placeholder="Pseudo"/>
                        </div>
                        <br>
                        <br>
                </div>
                <div class="col-lg-4 colonne">
                        <div>
                            <label class="lab" for="Login">Login :</label>
                        </div>
                        <div>
                            <input type="text" name="login" class="form-control " placeholder="Login"/>
                        </div>
                        <br>
                        <div>
                            <label class="labMdp" for="MotDePasse">Mot de Passe :</label>
                        </div>
                        <div>
                            <input type="password" name="motDePasse" class="form-control " placeholder="Mot de Passe"/>
                        </div>
                        <br>

                </div>


            
            </div>
            <div class="row justify-content-md-center">
                <input type="submit" class="btn BoutonInscriptionForm" value="S'inscrire" name="formInscription"/>
            </div>
            </form>


        </div>
    </div>
</div>

</html>

<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
