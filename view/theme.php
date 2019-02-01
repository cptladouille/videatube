<?php ob_start(); ?>

<?php
if($data == null)
{ ?>
    <h2>Toutes les vidéos par thème</h2>
<?php }
else{ ?>
    <h2>Toutes les vidéos du theme <?= $data; ?></h2>
<?php }  ?>

    <div class="container">
        <div class="row">


            <div class="col-lg-2">
                <h1 class="my-4 titleTheme">VideaTube</h1>
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


            <div class="col-lg-9">
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

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

     <!-- Bootstrap core JavaScript -->
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<?php $content = ob_get_clean();
require_once ('view/template.php');?>