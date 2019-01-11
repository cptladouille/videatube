<?php ob_start(); ?>
    <div class="container">
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
            <?php 
            if($data == null)
            { ?>
            <h2>Toutes les vidéos par thème</h2>
            <?php }
            else{ ?>
            <h2>Toutes les vidéos du theme <?= $data; ?></h2>
            <?php } ?>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#" class="titreVideo">Item One</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#" class="titreVideo">Item Two</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#" class="titreVideo">Item Three</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#" class="titreVideo">Item Four</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#" class="titreVideo">Item Five</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#" class="titreVideo">Item Six</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
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