<?php if(isset($_SESSION['delete'])){
               
               unset($_SESSION['delete']);
            };

//---------------------------------------------------------------------------------------//
//--------------------la view ADMIN de tous les sites en bdd----------------------------//
//---------------------------------------------------------------------------------------// 

?>

<?php ob_start(); ?>

<div class="container">

    <h1>Tous les sites qu'on a en stock !</h1>
        <hr/>
    <?=  (!empty($alert)) ? $alert : '' ; ?>

    <a href="<?=url('admin/site/add'); ?>" class="btn btn-primary">Ajouter un nouveau site</a>

    <div class="mt-4">
        <?php foreach ($sites as $site): ?>
            <div class="row mb-2">
                <div class="col-2">
                    <img src="<?= img_url($site['s_slug'].$site['s_imgindex']); ?>" width="100%" alt="">
                </div>
                <div class="col-10">
                    <a href="<?= url('admin/'.$site['s_id'].'/'.$site['s_slug']); ?>"><?= $site['s_nom']; ?></a><br>
                    <a href="<?= url('admin/site/delete/'.$site['s_id']) ?>" class="btn btn-sm btn-danger">Supprimer</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>