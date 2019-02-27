<?php ob_start();  ?>
<div class="row">
    <div class="col-lg-3 sideSearchBar BodySearch">
        <?php require_once('./view/sideSearch.php'); ?>
    </div>
    <div class="col-lg-9 " id="contentSearch">
        <br>
        <?php require_once('./view/contentSearch.php'); ?>
    </div>
</div>
<script src="./assets/js/ajax.js"> </script>
<?php $content = ob_get_clean();

require_once('view/template.php'); ?>
