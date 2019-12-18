<?php

//-----------------------------------------------------------------------------//
// \\--------------------la view public d'un seul site----------------------------//
// //-----------------------------------------------------------------------------//

?>

<?php ob_start(); ?>
    <div class='container'>
        <div class='' id= "public-onesite">
            <a title='Accéder au site' href="<?= $site['s_url']; ?>" class="p-5" target="_blank">
                <img id='onesite-icon' class="float-left p-2 pb-3" src="<?= img_url($site['s_slug'].$site['s_imgindex']); ?>" width="50%" alt="">

            </a>

            <div class="pb-2">
                <br/>
                <a id="nomsite" title='Accéder au site' href="<?= $site['s_url']; ?>" class="" target="_blank">
                    <h3 class=""><?= $site['s_nom'];  ?></h3>
                </a>
                <p class=""><?= $site['s_description']; ?></p>
            </div>
            
            
            <?php foreach ($images as $img):?>
                <img id="screenshots" src="<?= img_url($site['s_slug'].$img['sm_url']); ?>" width="100%" alt="" class="m-1">
            <?php endforeach; ?>
            
            <h6><u>Tags associés :</u></h6>
            
            <?php foreach ($tags as $key => $tag):?>

                <a  href="<?= url('tagsite/'.$tag['t_id'].'/'.$tag['t_slug']); ?>" class="">
                    <td><?= $tag['t_nom'].' | ';?></td>
                </a>

            <?php endforeach; ?>
                <img src="" width="100%" alt="">
            
        
        </div>
    </div>



<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>