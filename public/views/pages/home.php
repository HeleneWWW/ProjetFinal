<?php ob_start(); ?>



<div>
    <img class="w-100" src="<?= img_url('finalbanner.png') ?>">
</div>
<!-- Saut de ligne  -->
<br>    

<!-- Logos Tags -->

<?php foreach ($tags as $tag):?>
    <img src="<?= img_url($tag['t_slug'].$tag['t_img']); ?>" width="20%" alt="">
    <?php endforeach; ?>
    

<!-- FIN DU TEST -->
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>