<?php ob_start(); ?>



<div>
    <img class="w-100" src="<?= img_url('finalbanner.png') ?>">
</div>
<!-- Logos Tags -->

<!-- <div class="col- row justify-content-center">
    <?php foreach ($tags as $tag):?>
    <a  href="<?= url('tagsite/'.$tag['t_id'].'/'.$tag['t_slug']); ?>" class="">
        <img src="<?= img_url($tag['t_slug'].$tag['t_img']); ?>" width="40%" alt="">
    </a>
    <?php endforeach; ?>
</div> -->

<div class='container-flex' id='alltags'>
    <div class='row justify-content-center'>

        <?php foreach ($tags as $tag): ?>
            <div class="card col-lg-1 col-md-3 col-sm-4 d-row">
                <a  href="<?= url('tagsite/'.$tag['t_id'].'/'.$tag['t_slug']); ?>" class="">
                    <img src="<?= img_url($tag['t_slug'].$tag['t_img']); ?>" class="card-img-top p-1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $tag['t_nom']; ?></h5>
                        </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>