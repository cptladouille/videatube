<?php ob_start(); ?>
<div class="bodyTheme">


    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php require_once('view/themeMenu.php') ?>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">  
                <div class="row">
                    <div class="CadrePresentation">
                    <?php
                    if(!isset($t))
                    { ?>
                        <h2 class="">Toutes les vidéos par thème</h2>
                    <?php }
                    else{ ?>
                        <h2>Toutes les vidéos du theme <?= $t->getTitle(); ?></h2>
                    <?php }  ?>
                    </div>
                </div>
                <div class="row">
                    <?php
                        for($i = 0;$i<count($data);$i++)
                        { ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                <?php if($data[$i]->getThumbnail() == "")
                                { ?>
                                    <a href="video-<?= $data[$i]->getId(); ?>"><img class="card-img-top" width="300" height="210" src="./ressources/default.svg" alt=""></a>
                                <?php 
                                }else
                                { ?>
                                <a href="video-<?= $data[$i]->getId(); ?>"><img class="card-img-top" width="300" height="210" src="./ressources/thumb/<?= $data[$i]->getThumbnail(); ?>" alt=""></a>
                                <?php 
                                } ?>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="video-<?= $data[$i]->getId(); ?>" class="titreVideo"><?= $data[$i]->getTitle(); ?></a>
                                        </h4>
                                        <?php if($data[$i]->getPrice() == 0){ ?>
                                            <h5>Gratuit</h5>
                                        <?php }else{ ?>
                                            <h5><?= $data[$i]->getPrice(); ?>€</h5>
                                        <?php } ?>
                                        <p class="card-text"><?= $data[$i]->getDescription(); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><?= $data[$i]->getNbViews(); ?> vues</small>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        } ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
     <!-- Bootstrap core JavaScript -->
</div>
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<?php $content = ob_get_clean();
require_once ('view/template.php');?>