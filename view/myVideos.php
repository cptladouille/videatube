<?php $title = 'myVideos';
ob_start(); ?>

    <div class="container">
            <!-- /.col-lg-3 -->
            <div class="row">
                <?php
                if (isset($_SESSION['userConnected']))
                {
                    if ($_SESSION['userConnected']['isSubscribed'] == true)
                    { ?>
                        <h2>Vous êtes abonné, Vous avez par conséquent accès a l'ensemble des vidéos du site ! :)<h2>
                    <?php 
                    }else
                    {
                    for ($i = 3; $i < count($data); $i++) { ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <?php if ($data[$i]->getThumbnail() == "") { ?>
                                    <a href="video-<?= $data[$i]->getId(); ?>">
                                        <img class="card-img-top" width="300" height="210" src="./ressources/default.svg" alt="">
                                    </a>
                                <?php } else { ?>
                                    <a href="video-<?= $data[$i]->getId(); ?>">
                                        <img class="card-img-top" width="300" height="210" src="./ressources/thumb/<?= $data[$i]->getThumbnail(); ?>" alt="">
                                    </a>
                                <?php } ?>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="video-<?= $data[$i]->getId(); ?>"
                                        class="titreVideo"><?= $data[$i]->getTitle(); ?></a>
                                    </h4>
                                    <?php if ($data[$i]->getPrice() == 0) { ?>
                                        <h5>Gratuit</h5>
                                    <?php } else { ?>
                                        <h5><?= $data[$i]->getPrice(); ?>€</h5>
                                    <?php } ?>
                                    <p class="card-text"><?= $data[$i]->getDescription(); ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?= $data[$i]->getNbViews(); ?> vues</small>
                                </div>
                            </div>
                        </div>
                    <?php }
                    }
                }
                ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
        <!-- /.row -->

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<?php $content = ob_get_clean();
require('view/template.php'); ?>