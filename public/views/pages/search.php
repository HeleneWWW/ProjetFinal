
<?php ob_start(); ?>

<div class="container">

    <h1>Votre recherche</h1>
        <hr/>

    <?php if($tag): ?>

    <h1>Sites associés au tag : <?=$tag[0]['t_nom']; ?></h1>
        <?php foreach($tag as $info): ?>
        <img src="<?= img_url($info['s_slug'].$info['s_imgindex']); ?>" width="10%" alt="">
    <a href ="<?= url('site/'.$info['s_id'].'/'.$info['s_slug']); ?>"><h6><?= $info['s_nom']; ?></h6></a>
        <?php endforeach; ?>
        
    <?php else: ?>

        <?php if($nom):  ?>
        <h1>Résultat de votre recherche pour '<?= $_GET['site'];?>' </h1>            
            <?php foreach($nom as $info): ?>
            <img src="<?= img_url($info['s_slug'].$info['s_imgindex']); ?>" width="10%" alt="">
    <a href ="<?= url('site/'.$info['s_id'].'/'.$info['s_slug']); ?>"><h6><?= $info['s_nom']; ?></h6></a>
            <?php endforeach; ?>
        <?php endif; ?>

    <?php endif; ?>

</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>