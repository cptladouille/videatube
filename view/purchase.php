<?php $title = 'Purchase';
ob_start(); ?>

<div class="container">

    <div class="row">
        <div class="col-md-12 order-md-1">
                <div class = "row">
                    <div class="col-md-6 mb-3">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Récapitulatif</span>
                            <span class="badge badge-secondary badge-pill"></span>
                        </h4>
                    </div>
                </div>
                <div class = "row">
                    <div class = "align-items-left">
                        <label class="align-items-left " ><?= $data->getTitle(); ?></label>
                    </div>
                    <div class = "align-items-right">
                        <label class="align-items-right" ><?= $data->getPrice(); ?></label>
                    </div>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">Paiement</h4>
            <form method = 'post' action ='purchase'>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                               required>
                        <label class="custom-control-label" for="credit">Carte de crédit</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Nom du propriétaire de la carte</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>   
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Numéro de carte de crédit</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Date d'expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Code sercret</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    </div>
                </div>
                <?php 
                    if(isset($_POST['signUp']))
                    { ?>
                        <input type="hidden" name="purchaseSubId" value = <?= $data->getId(); ?>>
                    <?php
                    }
                    elseif(isset($_POST['purchase']))
                    { ?>
                        <input type="hidden" name="purchaseVideoId" value = <?= $data->getId(); ?>>
                    <?php
                    }
                ?>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Valider la commande</button>
            </form>
        </div>
    </div>


</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
