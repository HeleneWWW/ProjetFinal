<?php

// PagesController.php

class PagesController {

    /* Page d'acceuil  */ 
    public function home() {

        $tags = Tags::findAllTags();

        // données à récuperer de mon model
        view('pages.home', compact('tags'));



    }

    public function about() {

        view('pages.about');
    }



    public function all(){
        // appel a la BDD 
        $sites = Site::findAll();
        // $tags = Site::findOne();

        view('site.allsite', compact('sites'));
    }

    public function contact() {

        $form = new Form($_POST,"mailto:devHelper2019@gmail.com");

        $form->input('text', "pseudo", "Pseudo")->required()
            ->input('text', "email", "E-mail")->required()->is_email()
            ->input('text', "nom", "Nom du site")->required()
            ->input('text', "lien", "Lien du site")->required()->is_url()
            ->input('textarea', "description", "Description")
            ->submit('Envoyer');

        $formulaireHtml = $form->getForm();

        $formValid  = false;
        $errors     = false; 

        // si le formulaire est validé 
        if($data = $form->valid()){

            // formulaire valide
            $formValid = true;

            // Enregistrement des données

        } else {
            // affichage des erreurs 
            $errors =  $form->displayErrors();
        }

        // vue de la page contact 
        view('pages.contact', compact('formulaireHtml', 'errors', 'formValid'));
    }
    
    public function page404() {

        view('pages.404');

    }


    

    public function login(){
        if((!isset($_SESSION['user'])) || (!isset($_SESSION['user']))){

    $form = new Form($_POST);
    $form->input('text','pseudo','Pseudo')->required()
        ->input('password', 'password','Mot de passe')->required()
        ->submit('Se connecter');

    $formhtml = $form->getForm();

    $formValid  = false;
    $errors     = false; 

    // si le formulaire est validé 
    if($form->valid()){

        // formulaire valide
        $formValid = true;

        // ENregistrement des données
        //var_dump($_POST);

   $info = User::connect($_POST['pseudo'], $_POST['password']);
            // var_dump($info);
        if ($info){
            redirectTo('');
        }
     } else {
         
        // affichage des erreurs 
        $errors =  $form->displayErrors();
        
    }

    // vue de la page contact 
        view('pages.login', compact('formhtml', 'formValid', 'errors'));

}else{

redirectTo('');
        }

    }

    public function signup(){
        
        if((!isset($_SESSION['user'])) || (!isset($_SESSION['admin']))){

            $form = new Form($_POST);

        $form->input("text", 'pseudo','Ton pseudo')->required()->min(8)->max(30)
            ->input('text', "email", "Ton e-mail")->required()->is_email()
            ->input('password', "password", "Ton mot de passe")->required()->min(8)->max(50)
            ->input('password', "password2", "Confirmation de ton mot de passe")->required()->equal('password')->min(8)->max(50)

            ->submit('enregistrer');

        $formhtml = $form->getForm();

        $formValid  = false;
        $errors     = false; 

        // si le formulaire est validé 
        if($data = $form->valid()){

            // formulaire valide
            $formValid = true;

            // Enregistrement des données
        $register = User::register();
        var_dump($register);
        if($register){
            // redirectTo('');
        }

        } else {
            // affichage des erreurs 
            $errors =  $form->displayErrors();
        }

        // vue de la page contact 
        view('pages.signup', compact('formhtml', 'errors', 'formValid'));

    }

}




    public function logout(){
        User::logout();
        redirectTo('login');

    }


    public function show($id){
        $site = Site::findOne($id);
        $tags = Site::tagsAssocies($id);
        $images = Site::findMedias($id);

// var_dump($site);
        view('site.onesite', compact('site','tags','images'));
    }


//créer la page pour afficher en view (dans un doss tag à créer) ex: sitebytag.php
    public function allSitesByTag($id, $slug){
        $sitesbytag = Tags::sitesByTag($id);

        view('tag.sitesbytag', compact('sitesbytag'));
    }

    

}