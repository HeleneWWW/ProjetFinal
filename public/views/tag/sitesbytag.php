<?php ob_start(); ?>

    <div class='container'>
        
    <h1>Tous les sites avec le tag <?= $sitesbytag[0]['t_nom']; ?> !</h1>
      <hr/>
    <?=  (!empty($alert)) ? $alert : '';  ?>
  </div>
   
    <div class='container' id='sitesbytag'>
        <div class='row'>

            <?php foreach ($sitesbytag as $site): ?>
                <div class="card col-lg-2 col-md-3 col-sm-4 d-row">
                    <img src="<?= img_url($site['s_slug'].$site['s_imgindex']); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?= $site['s_nom']; ?></h5>
                    
                    
                    <a  href="<?= url('site/'.$site['s_id'].'/'.$site['s_slug']); ?>" class="btn btn-info">Plus d'info</a>

                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <?php echo '<pre>';var_dump($sitesbytag) ?>

    </div>

<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>