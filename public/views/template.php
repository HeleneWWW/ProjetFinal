<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <link rel="icon"  href="<?= img_url('logodH.ico') ?>" />
        
        <!-- Ajout de la font Questrial -->    
        <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

        <title><?= isset($title) ? $title : WEBSITE_TITLE ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?= css_url('bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?= css_url('style.css'); ?>" rel="stylesheet">
    </head>
    <body>

<!---------------------------------------------------------------------------------------------------------------->
<!------------------------------------------Header---------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------->
        <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
                <a class="navbar-brand" href="<?= BASE_URL; ?>">
                    <img src="<?= img_url('devHelper.png') ?>" alt="devHelper" class="d-none d-md-block" />
                    <img src="<?= img_url('dh.png') ?>" alt="devHelper" class="d-md-none" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('a-propos') ?>">A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('contact') ?>">Qontact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('site') ?>">Sites</a>
                        </li>


<!---------------------------------------------------------------------------------------------------------------->
<!------------------------------------------Inscription----------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------->

                    <?php if((!isset($_SESSION['user'])) && (!isset($_SESSION['admin']))): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('signup') ?>">S'inscrire</a>
                        </li>
                    <?php endif;?>

<!----------------------------------------------------------------------------------------------------------------->
<!-----------------------------------------Connexion / Déconnexion------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->


                    <?php if((isset($_SESSION['user'])) || (isset($_SESSION['admin']))): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= url('logout') ?>">Déconnexion</a>
                            </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('login') ?>">Qonnexion</a>
                        </li>
                    <?php endif; ?>
                    

<!----------------------------------------------------------------------------------------------------------------->
<!---------------------------------------Session Admin pour modifier/supprimer------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->

                    <?php if(isset($_SESSION['admin'])): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= url('admin/site') ?>">Admin</a>
                            </li>
                    <?php endif; ?>
                        
                    </div>

<!------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------Petit message perso post connexion-------------------------------->
<!------------------------------------------------------------------------------------------------------------------->

                    <div class="pr-2 d-none d-xl-block">
                        <?php if(isset($_SESSION['user'])): ?>
                            <span>Merci pour tes données perso <?=$_SESSION['user'];?> ! </span>
                        <?php endif;?>
                        <?php if(isset($_SESSION['admin'])): ?>
                            <span> <?=$_SESSION['admin'];?> est la meilleure Admin ! </span>
                        <?php endif;?>
                    </div>
        

<!------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------Barre de recherche------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------->

                    </ul>
                    <form class="form-inline my-2 my-lg-0 d-none d-sm-block" action="<?= url('search') ?>" method="get" id="form-search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un site" aria-label="Recherche">
                        <button class="searchbtn btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                </div>
            </nav>
        </header>

<!------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------Main------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------->

        <main role="main" >
            <div class="album py-5 bg-light ">


<!----------------------------Pour empêcher la mini bannière de s'afficher sur la home------------------------------->

                <?php if($_SERVER['REQUEST_URI'] != url('')) :?>
                    <div>
                        <img class="w-100" src="<?= img_url('lilfinalbanner.png') ?>">
                    </div>
                <?php endif;?>

<!------------------------------Contenu de la page------------------------------------------------------------------>

                <div class="">
                    <?php
                        
                        echo $content; 
                    ?>
                </div>
            </div>
        </main>

<!------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------Footer----------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->

        
        <footer class="page-footer font-small bg-dark text-light pt-3">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <h5 class="text-uppercase font-weight-bold">L'équipe :</h5>
                        <p>- LE CALVEZ Gaëlle |  </p>
                        <p>- LE FAY Laetitia | </p>
                        <p>- WITKOWSKI Helene |</p><br/>
                    </div>

            <hr class="clearfix w-100 d-md-none ">

                    <div class="col-md-6 mb-md-0 mb-3">
                        <br/><br/><br/><br/>
                        <img class="float-right" src="<?= img_url('logodH.ico') ?>"/><br/>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center pb-2">© 2019 Copyright :
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">  devHelper.com</a>
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?= js_url('masonry.pkgd.min.js'); ?>"></script>  <!--  Script de Masonry -->
        <script src="<?= js_url('script.js'); ?>"></script>
    </body>
</html>