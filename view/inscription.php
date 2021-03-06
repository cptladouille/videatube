<?php $title = 'Inscription';
ob_start(); ?>


<div class="bodyInscription">
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
        <div class="col-lg-6 formulaireInscription">
            <div>
                <h1 class="titleInscription">INSCRIVEZ VOUS!</h1>
            </div>
            <div class="row justify-content-md-center">
                <form method="post" action="inscription">
                    <table>
                        <tr>
                            <td>
                                <div>
                                    <label class="labProfil" for="Nom">Nom :</label>
                                </div>
                                <div>
                                    <input type="text" name="nom" class="form-control" placeholder="Nom" pattern="[A-Za-z]+"/>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label class="labProfil" for="Prenom">Prenom :</label>
                                </div>

                                <div>
                                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" pattern="[A-Za-z]+"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label class="labProfil" for="Mail">Mail :</label>
                                </div>

                                <div>
                                    <input type="text" name="mail" class="form-control inscriptionInputMail"
                                           placeholder="Mail"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <label class="labProfil" for="Pseudo">Pseudo :</label>
                                </div>
                                <div>
                                    <input type="text" name="pseudo" class="form-control litle input "
                                           placeholder="Pseudo"/>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label class="labProfil" for="Login">Login :</label>
                                </div>
                                <div>
                                    <input type="text" name="login" class="form-control " placeholder="Login"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="colonneMdp" >
                                <div>
                                    <label class="labProfil" for="MotDePasse">Mot de Passe :</label>
                                </div>
                                <div>
                                    <input type="password" name="motDePasse" class="form-control inscriptionInputMdp" placeholder="Mot de Passe" pattern="[A-Za-z0-9]+"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label class="labProfil" for="avatar">Avatar : <a href="https://www.casimages.com/">herbege-le
                                        ici et colle nous le lien !</a></label>
                                </div>
                                <div>
                                    <input type="text" name="avatar" class="form-control avatarInscription " placeholder="Avatar"/>
                                </div>
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="row justify-content-md-center">
                <input type="submit" class="btn BoutonInscriptionForm" value="S'inscrire" name="formInscription"/>
            </div>
            </form>

        </div>
    </div>
</div>
</div>


<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
