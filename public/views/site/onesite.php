<?php

//-----------------------------------------------------------------------------//
// \\--------------------la view public d'un seul site----------------------------//
// //-----------------------------------------------------------------------------//

?>

<?php ob_start(); ?>

<h1><?= $site['s_nom'];  ?></h1>
<h6>Tags associés : </h6>
<?php foreach ($tags as $key => $tag):?>
<li><?= $tag['t_nom'];?></li>
<?php endforeach; ?>
<img src="" width="100%" alt="">
 



<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>