<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <link rel="icon"  href="<?= img_url('logodH.ico') ?>" />
        <title><?= isset($title) ? $title : WEBSITE_TITLE ?></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?= css_url('style.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height:50px;">
                <div class="container">    
                    <a class="navbar-brand" href="<?= BASE_URL; ?>">
                        <img src="<?= img_url('devHelper.png') ?>" alt="devHelper" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------Barre de recherche------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
                        
                        <form action="<?= url('search') ?>" method="get" id="form-search">
                            <div class="input-group mb-6">
                                <input type="text" class="form-control" placeholder="Rechercher un site" id="input-site" name="site">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit" id="button">Rechercher</button>
                            </div>
                            </div>
                        </form>
                        <li class="nav-item">
                                <a class="nav-link" href="<?= url('a-propos') ?>">A Propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= url('contact') ?>">Contact</a>
                            </li>
                            
                           
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="<?= url('site') ?>">Sites</a>
                            </li> -->



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
                            <a class="nav-link" href="<?= url('login') ?>">Connexion</a>
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
                        </ul>
                    </div>
<!------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------Petit message perso post connexion-------------------------------->
<!------------------------------------------------------------------------------------------------------------------->

<?php if(isset($_SESSION['user'])): ?>
<span>Merci pour tes données perso <?=$_SESSION['user'];?> !</span>
<?php endif;?>
<?php if(isset($_SESSION['admin'])): ?>
<span> <?=$_SESSION['admin'];?> est la meilleure Admin !</span>
<?php endif;?>

                </div>
            </nav>
        </header>

        <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <?php
                    // contenu de la page
                    echo $content; 
                ?>
            </div>
        </div>
        </main>

        <footer class="bg-dark text-light">
            <div class="container">
            <p>L'équipe :</p>
            <p>- LE CALVEZ Gaëlle | </p>
            <p>- LE FAY Laetitia | </p>
            <p>- WITKOWSKI Helene |</p><br/>
             <img class="float-right" src="<?= img_url('logodH.ico') ?>"/><br/>
            <p>2019 &copy; </p>
           
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?= js_url('script.js'); ?>"></script>
    </body>
</html>