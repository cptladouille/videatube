<?php $title = 'Profil';
ob_start();
?>

    <div class="bodyProfil">
        <div class="col-lg-8  containerAlerte">
            <?php  if(isset($_POST['alert'])){ ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Erreur !</strong> <?= $_POST['alert']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"  onclick="return getOutput();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php }
            if(isset($_POST['info'])){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Info !</strong> <?= $_POST['info']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="return getOutput();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            } ?>
        </div>

        <?php
        // Formulaire d'édition générale de profil
        if (isset($_POST['editUser'])) { ?>
            <div class="containerProfil col-lg-6 editForm">
                <div class="ChampProfilEdit">
                    <form method="post" action="profil">
                        <table>
                            <tr class="text-center">
                                <td colspan="2">
                                    <div>
                                        <label class="labProfil " for="avatar">Avatar :
                                            <img src="./ressources/avatars/<?= $_SESSION['userConnected']['avatar']; ?>"
                                                 width="200px" height="200px" class="d-inline-block align-top avatar" alt="">
                                        </label>
                                        <input type="text" name="avatar" class="form-control "
                                               placeholder=" <?= $_SESSION['userConnected']['avatar']; ?>"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>


                                <td>
                                    <div>
                                        <label class="labProfil" for="nom">Nom :</label>
                                        <input type="text" name="nom" class="form-control "
                                               placeholder=" <?= $_SESSION['userConnected']['lastname']; ?>" pattern="[A-Za-z0-9]+"/>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label class="labProfil" for="prenom">Prénom :</label>
                                        <input type="text" name="prenom" class="form-control "
                                               placeholder=" <?= $_SESSION['userConnected']['firstname']; ?>" pattern="[A-Za-z0-9]+"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <label class="labProfil" for="pseudo">Pseudo :</label>
                                        <input type="text" name="pseudo" class="form-control "
                                               placeholder=" <?= $_SESSION['userConnected']['nickname']; ?>" />
                                    </div>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div>
                                        <label class="labProfil" for="mail">Email :</label>
                                        <input type="text" name="mail" class="form-control mailEdit"
                                               placeholder=" <?= $_SESSION['userConnected']['mail']; ?>"/>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-items-center">
                                <td>
                                    <div>
                                        <input class="btn  my-2 my-sm-0  BoutonFormEditProfil" type="submit"
                                               name="validateEditUser"
                                               value='Accepter les modifications'>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <?php
            // Formulaire de changement de mot de passe
        } elseif (isset($_POST['editUserPassword'])) { ?>
            <div class="containerProfil col-lg-4 editForm">
                <div class="ChampEditMdp">
                    <form method="post" action="profil">
                        <div>
                            <label class="labProfil" for="password">Nouveau mot de passe : </label>
                            <input type="text" name="password" class="form-control formulaireInput3"/>
                        </div>
                        <br>
                        <div>
                            <label class="labProfil" for="password2">Confirmer le mot de passe : </label>
                            <input type="text" name="password2" class="form-control formulaireInput3"/>
                        </div>
                        <br>
                        <div class="text-left">
                            <input class="btn  my-2 my-sm-0 BoutonFormEditMdp" type="submit"
                                   name="validateEditPasswordUser"
                                   value='Changer le mot de passe'>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['alert'])) { ?>
                        <div class="alert"><label><?= $_POST['alert']; ?></label></div>
                        <?php
                    } ?>
                </div>
            </div>

            <?php
            // Formulaire d'informations générales de profil
        } else { ?>
            <div class="containerProfil col-lg-8">
                <div class="row">
                    <div class="photoProfil">
                        <?php
                        if ($_SESSION['userConnected']['avatar'] != '') { ?>
                            <img src="./ressources/avatars/<?= $_SESSION['userConnected']['avatar']; ?>" class="avatar"
                                 alt="" width="200" height="200" >
                            <?php
                        } else { ?>
                            <img src=http://image.noelshack.com/fichiers/2019/01/4/1546507376-profile-2092113-12802.png
                                 width="400" height="400" class="avatar">
                        <?php } ?>

                        <table  class="TableauProfil">
                            <tr>
                                <td>
                                    <form method="post" action="profil">
                                        <input class="btn  my-2 my-sm-0  BoutonEditProfil " type="submit" name="editUser"
                                               value='Modifier mon profil'>
                                    </form>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <form method="post" action="profil">
                                        <input class="btn  my-2 my-sm-0  BoutonEditPassword" type="submit" name="editUserPassword"
                                               value='Changer de mot de passe'>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input href="deleteAccount" data-confirm="Etes-vous certain de vouloir supprimer votre compte ?"
                                           class="btn  my-2 my-sm-0 BoutonSupprimerCompte" type="submit" value="Supprimer mon compte">
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="ChampProfil">
                        <table>
                            <tbody>
                            <tr>
                                <td><label class="labProfil" for="nom">Nom : </label>
                                    <?= $_SESSION['userConnected']['lastname']; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="labProfil" for="prenom">Prénom : </label>
                                    <?= $_SESSION['userConnected']['firstname']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="labProfil" for="pseudo">Pseudo : </label>
                                    <?= $_SESSION['userConnected']['nickname']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="labProfil" for="mail">Email : </label>
                                    <?= $_SESSION['userConnected']['mail']; ?>
                                </td>
                            </tr>
                            <td>
                                <label class="labProfil" for="role">Rôle : </label>
                                <?= $_SESSION['userConnected']['roleLabel']; ?>
                            </td>
                            <?php
                            if (isset($_SESSION['userConnected']['isSubscribed']) && $_SESSION['userConnected']['isSubscribed'] == true )
                            { ?>
                            <tr>
                                <td>
                                    <label class="labProfil" for="statutAbo">Statut abonné : </label>
                                    Abonné
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <label class="labProfil" for="dateAbo">Date de fin d'abonnement : </label>
                                    <?= $_SESSION['userConnected']['aboDate'] ?>
                                </td>
                            </tr>
                            <?php
                            if($isInTrial == true)
                            {
                                ?>
                                <tr>
                                    <td>
                                        <input href="unsub" data-confirm="Etes-vous certain de vouloir mettre fin a la période d'essai ?" class="btn  my-2 my-sm-0 BoutonSubscribe" type="submit" value="Annuler l'abonnement">
                                    </td>
                                </tr>
                                <?php
                            } ?>
                            </tbody>
                        </table>
                        <?php
                        }else
                        { ?>
                            <tr>
                                <td>
                                    <label class="labProfil" for="statutAbo">Statut abonné : </label>
                                    Non abonné
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form method='post' action='subscription'>
                                        <input class="btn  my-2 my-sm-0 BoutonSubscribe" type="submit" name="subscription" value="S'abonner">
                                    </form>
                                </td>

                            </tr>
                            </tbody>
                            </table>
                            <?php
                        } ?>
                    </div>
                </div>

            </div>
        <?php } ?>

    </div>

<?php $content = ob_get_clean();
require_once('view/template.php'); ?>

