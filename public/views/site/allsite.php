<?php

//---------------------------------------------------------------------------------------//
//--------------------la view public de tous les sites en bdd----------------------------//
//---------------------------------------------------------------------------------------// 

?>



<?php ob_start(); ?>


    <h1>Tous les sites qu'on a en stock !</h1>
        <hr/>
        <?=  (!empty($alert)) ? $alert : '';  ?>


        

<!-- <?php foreach ($sites as $site): ?>
<div class="card bd-highlight col-md-2 no-wrap">
  <img src="<?= img_url($site['s_slug'].$site['s_imgindex']); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $site['s_nom']; ?></h5>
    <a href="<?= url('site/'.$site['s_id'].'/'.$site['s_slug']); ?>" class="btn btn-primary">Plus d'info</a>
    </div>
     </div>
<?php endforeach; ?> -->



<div class="container">

<div class="card-group">
  <div class="card">

    <img src="<?= img_url($site['s_slug'].$site['s_imgindex']); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $site['s_nom']; ?></h5>
     
      
      <a href="<?= url('site/'.$site['s_id'].'/'.$site['s_slug']); ?>" class="btn btn-primary">Plus d'info</a>

    </div>
  </div>
  
</div>

</div>






   

<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>