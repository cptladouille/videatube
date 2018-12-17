<?php $title = 'VideaTube'; ?>

<?php ob_start(); ?>

<h1>La meilleure plateforme de vidéastes</h1>
<div>
<p>Vidéos récentes :</p>

    <?php
    while ($data = $posts->fetch())
    {
    ?>
        <div class="news">
            <h3>
                <?= htmlspecialchars($data['title']) ?>
                <em>le <?= $data['creation_date_fr'] ?></em>
            </h3>
            <p>
                <?= nl2br(htmlspecialchars($data['content'])) ?>
                <br />
                <em><a href="post.php?id=<?= $data['id'] ?>">Commentaires</a></em>
            </p>
        </div>
    <?php
    }
    $posts->closeCursor();
    ?>

</div>

<?php $content = ob_get_clean(); ?>