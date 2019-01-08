<?php $title = 'Acceuil';
ob_start(); ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

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
                    <table class="tableauCarousel">
                        <tr>
                            <td>
                                <div class="colonneTab firstColTab">
                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the bulk
                                                    of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colonneTab">
                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the
                                                    bulk of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colonneTab ">

                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the
                                                    bulk of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>

                </div>

                <div class="item">
                    <table class="tableauCarousel">
                        <tr>
                            <td>
                                <div class="colonneTab firstColTab">
                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the bulk
                                                    of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colonneTab">
                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the
                                                    bulk of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colonneTab ">

                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the
                                                    bulk of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>

                </div>

                <div class="item">
                    <table class="tableauCarousel">
                        <tr>
                            <td>
                                <div class="colonneTab firstColTab">
                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the bulk
                                                    of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colonneTab">
                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the
                                                    bulk of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colonneTab ">

                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>

                                        <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the
                                                    bulk of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>

                </div>

                <div class="item">
                    <table class="tableauCarousel">
                        <tr>
                            <td>
                                <div class="colonneTab firstColTab">
                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>

                                        <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the bulk
                                                    of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colonneTab">
                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                        <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the
                                                    bulk of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="colonneTab ">

                                    <div class="card mb-2">
                                        <object data="<?= $data[0] ?>"></object>
                                        <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the
                                                    bulk of the
                                                    card's content.</p>
                                                <a class="btn btn-primary btnCarou">Button</a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>

                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    </body>
    </html>


<?php $content = ob_get_clean();
require_once('view/template.php'); ?>