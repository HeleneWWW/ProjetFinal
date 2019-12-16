
<?php ob_start(); ?>

<?php 
require 'Site.php';
if(isset($_GET['site'])){
    $tag = findByTag($_GET['site']);
    $name = findByName($_GET['site']);
    var_dump($_GET);
}

?>
<div class="container">


<form action="search.php" method="get" id="form-search">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Rechercher un site" id="site" name="site">
        <div class="input-group-append">
            <button class="btn btn-secondary" type="submit" id="button">Rechercher</button>
        </div>
    </div>
</form>


<main role="main">
    <div class="row">

        <!-- Element principal  -->  
        <div class="col-md-9 blog-main">
            
           
         
                <!-- element 1 -->
                <?= var_dump($_GET) ; ?>
                <?= ?>
                <!-- fin element 1 -->
         

          
        </div>
        <!-- fin  Element principal  -->  

    </div>
</main>
</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>