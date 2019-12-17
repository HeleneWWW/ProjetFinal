<?php

//---------------------------------------------------------------------------------------//
//--------------------la view public de tous les sites en bdd----------------------------//
//---------------------------------------------------------------------------------------// 

?>



<?php ob_start(); ?>


<h1>Tous les sites qu'on a en stock !</h1>
    <?=  (!empty($alert)) ? $alert : '';  ?>

<div class="mt-4">
    <?php foreach ($sites as $site): ?>
        <div class="row mb-2">
            <div class="col-2">
                <img src="<?= img_url($site['s_slug'].$site['s_imgindex']); ?>" width="100%" alt="">
            </div>
            <div class="col-10">
                <a href="<?= url('site/'.$site['s_id'].'/'.$site['s_slug']); ?>"><?= $site['s_nom']; ?></a><br>
                
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>