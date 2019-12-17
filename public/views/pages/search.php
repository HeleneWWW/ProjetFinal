
<?php ob_start(); ?>

<h1>Votre recherche</h1>
<?php var_dump($nom); ?>

<?php if($tag): ?>
<h1>Résultat de votre recherche pour le tag : <?=$tag[0]['t_nom']; ?></h1>
    <?php foreach($tag as $info): ?>
<a href ="<?= url('site/'.$site['s_id'].'/'.$site['s_slug']); ?>"><h6><?= $info['s_nom']; ?></h6></a>
    <?php endforeach; ?>
<?php else: ?>

    <?php if($nom): ?>
        <?php foreach($tag as $info): ?>

        <?php endforeach; ?>
    <?php endif; ?>

<?php endif; ?>






<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>