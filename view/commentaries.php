<div class="card-header ">
    Commentaires
  </div>
<div class="card-body">
    <?php 
    if (isset($cArray[0][1]["id"]))
    { 
        foreach($cArray as $commArray)
        {
            for($i = 1; $i< count($commArray);$i++)
            { ?>
                <p><?= $commArray[$i]['content'];?></p>
                <small class="text-muted">Posté par <?= $commArray[$i]['nickname'];?> le <?= $commArray[$i]['date_comm'];?></small>
                <hr>
        <?php }
        } 
    }else
    { ?>
        <p>Aucun commentaire pour cette vidéo n'a encore été posté</p>
    <?php } ?>
</div>