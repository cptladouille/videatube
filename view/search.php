<?php ob_start();  ?>
<div class="bodySearch">
<div class="row rowSearch">
   <div class="col-lg-3">
        <?php require_once('./view/sideSearch.php'); ?>
    </div>

    <div class="col-lg-8 colSearchVideo">
        <br>
        <div class = "row">
        <?php require_once('./view/contentSearch.php'); ?>
        </div>
    </div>

</div>
<script src="./assets/js/ajax.js"> </script>
<?php $content = ob_get_clean();

require_once('view/template.php'); ?>
