<?php ob_start();  ?>
<div class="row">
    <div class="col-lg-4 sideSearchBar">
        <?php require_once('./view/sideSearch.php'); ?>
    </div>
    <div class="col-lg-8">
        <?php require_once('./view/contentSearch.php'); ?>
    </div>
</div>
<?php $content = ob_get_clean();
require_once('view/template.php'); ?>
