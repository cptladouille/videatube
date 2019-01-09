<?php $title = 'Abonnement';
ob_start(); ?>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container-fluid bg-gradient p-5 containerAbo">
        <div class="row m-auto text-center w-75">

            <div class="col-4 princing-item red">
                <div class="pricing-divider ">
                    <h3 class="text-light"><?=  $datas[0]->getTitle();  ?></h3>
                    <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3"></span> <?= $datas[0]->getPrice(); ?><span class="h5">€</span></h4>
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
                </div>
                <div class="card-body bg-white mt-0 shadow">
                    <ul class="list-unstyled mb-5 position-relative UL">
                        <li>Profitez d'un jour d'abonnement afin d'avoir accès a toutes les vidéos du site durant une journée!</li>
                        <li>Nombre de jours d'abonnement : <?= $datas[0]->getDuration(); ?></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up</button>
                </div>
            </div>




            <div class="col-4 princing-item blue">
                <div class="pricing-divider ">
                    <h3 class="text-light"><?=  $datas[1]->getTitle();  ?></h3>
                    <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3"></span> <?= $datas[1]->getPrice(); ?><span class="h5">€</span></h4>
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
                </div>

                <div class="card-body bg-white mt-0 shadow">
                    <ul class="list-unstyled mb-5 position-relative UL">
                        <li>Profitez d'une semaine d'abonnement afin d'avoir accès a toutes les vidéos du site durant une semaine!</li>
                        <li>Nombre de jours d'abonnement : <?= $datas[1]->getDuration(); ?></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up </button>
                </div>
            </div>


            <div class="col-4 princing-item green">
                <div class="pricing-divider ">
                    <h3 class="text-light"><?=  $datas[2]->getTitle();  ?></h3>
                    <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3"></span> <?= $datas[1]->getPrice(); ?><span class="h5">€</span></h4>
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
        </svg>
                </div>

                <div class="card-body bg-white mt-0 shadow">
                    <ul class="list-unstyled mb-5 position-relative UL">
                        <li>Profitez d'un mois d'abonnement afin d'avoir accès a toutes les vidéos du site durant un mois!</li>
                        <li>Nombre de jours d'abonnement : <?= $datas[2]->getDuration(); ?></li>
                        <li>Nombre de jours d'essai offerts : <?= $datas[2]->getNbDaysTrial(); ?></li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block  btn-custom ">Sign up </button>
                </div>
            </div>

        </div>
    </div>




<?php $content = ob_get_clean();
require_once ('view/template.php');?>