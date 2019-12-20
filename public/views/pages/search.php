
<?php ob_start(); ?>

<div class="container">

    <h1>Votre recherche</h1>
        <hr/>
    
    


<div class='container' >
<div class='row'>
<?php if($tag): ?>

<h1>Sites associés au tag  <?=$tag[0]['t_nom']; ?>: </h1><br><hr>

  <?php foreach ($tag as $info): ?>
  <div class="card col-lg-2 col-md-3 col-sm-4 d-row">
    <img src="<?= img_url($info['s_slug'].$info['s_imgindex']); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $info['s_nom']; ?></h5><br/>
     
      
      <a  href="<?= url('site/'.$info['s_id'].'/'.$info['s_slug']); ?>" class="btn btn-info btn-block mt-auto">Plus d'info</a>

    </div>

  </div>
  <?php endforeach; ?>
  
</div>
</div>
<?php else: ?>

<div class='container' >
<div class='row'>
<?php if($nom):  ?>
        <h1>Résultat de votre recherche pour '<?= $_GET['site'];?>' </h1>      

  <?php foreach ($nom as $info): ?>
  <div class="card col-lg-2 col-md-3 col-sm-4 d-row">
    <img src="<?= img_url($info['s_slug'].$info['s_imgindex']); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $info['s_nom']; ?></h5><br/>
     
      
      <a  href="<?= url('site/'.$info['s_id'].'/'.$info['s_slug']); ?>" class="btn btn-info btn-block mt-auto">Plus d'info</a>

    </div>

  </div>
  <?php endforeach; ?>
  <?php endif; ?>
</div>
</div>

<?php endif; ?>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>