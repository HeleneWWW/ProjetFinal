<?php ob_start(); ?>



<div>
    <img class="w-100" src="<?= img_url('finalbanner.png') ?>">
</div>
<!-- Logos Tags -->

<div class="d-flex justify-content-center "><?php foreach ($tags as $tag):?>
    <a  href="<?= url('tagsite/'.$tag['t_id'].'/'.$tag['t_slug']); ?>" class="">
        <img src="<?= img_url($tag['t_slug'].$tag['t_img']); ?>" width="70%" alt="">
    </a>
<?php endforeach; ?></div>
    

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>