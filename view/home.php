<?php $title = 'Acceuil';
ob_start(); ?>

    <div class="container"><?php if(isset($_POST['alert']))
    { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erreur !</strong> <?= $_POST['alert']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

    </div>

    <?php } ?>
        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">VideaTube</h1>
                <div class="list-group">
                    <a href="home" class="list-group-item">Home</a>
                    <a href="theme-1" class="list-group-item">Action</a>
                    <a href="theme-2" class="list-group-item">Aventure</a>
                    <a href="theme-3" class="list-group-item">Beauté</a>
                    <a href="theme-4" class="list-group-item">Animaux</a>
                    <a href="theme-5" class="list-group-item">Cuisine</a>
                    <a href="theme-6" class="list-group-item">Tuto</a>
                    <a href="theme-0" class="list-group-item">Voir tous les thèmes</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9 listVideo">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <a href="video-<?= $data[0]->getId(); ?>">
                            <img class="d-block img-fluid" src="./ressources/thumb/<?= $data[0]->getThumbnail(); ?>" alt="First slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="video-<?= $data[1]->getId(); ?>">
                            <img class="d-block img-fluid" src="./ressources/thumb/<?= $data[1]->getThumbnail(); ?>" alt="Second slide">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="video-<?= $data[2]->getId(); ?>">
                            <img class="d-block img-fluid" src="./ressources/thumb/<?= $data[2]->getThumbnail(); ?>" alt="Third slide">
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row">
            

                <?php
                for($i = 3;$i<count($data);$i++)
                { ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="video-<?= $data[$i]->getId(); ?>"><img class="card-img-top" src="./ressources/thumb/<?= $data[$i]->getThumbnail(); ?>" alt=""></a>
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
                <?php }
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