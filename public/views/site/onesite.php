<?php

//-----------------------------------------------------------------------------//
// \\--------------------la view public d'un seul site----------------------------//
// //-----------------------------------------------------------------------------//

?>

<?php ob_start(); ?>
    <div class='container'>
        <div class='' id= "public-onesite">
            <a title='Accéder au site' href="<?= $site['s_url']; ?>" class="p-5" target="_blank">
                <img id='onesite-icon' src="<?= img_url($site['s_slug'].$site['s_imgindex']); ?>" width="50%" alt="">
                <h3 class=""><?= $site['s_nom'];  ?></h3>
            </a>
            <p><?= $site['s_description']; ?></p>
            
            <?php foreach ($images as $img):?>
                <img src="<?= img_url($site['s_slug'].$img['sm_url']); ?>" width="100%" alt="">
            <?php endforeach; ?>
            
            <h6>Tags associés : </h6>
            
            <?php foreach ($tags as $key => $tag):?>
                <td><?= $tag['t_nom'];?></td>
            <?php endforeach; ?>
                <img src="" width="100%" alt="">
            
        
        </div>
    </div>



<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>