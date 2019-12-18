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

        view('site.allsite', compact('sites'));
    }

    public function contact() {

        $form = new Form($_POST,"mailto:devHelper2019@gmail.com");

        $form->input('text', "pseudo", "Pseudo")->required()
            ->input('text', "email", "E-mail")->required()->is_email()
            ->input('text', "nom", "Nom du site")->required()
            ->input('text', "lien", "Lien du site")->required()->is_url()
            ->input('textarea', "description", "Description")->max(250)
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

   $info = User::connect($_POST['pseudo'], $_POST['password']);
            // var_dump($info);
        if ($info === true){
            redirectTo('');
        }else{
            $errors = $info; 
        }
     } else {
         
        // affichage des erreurs 
        $errors =  $form->displayErrors();
        
    }

    // vue de la page login 
        view('pages.login', compact('formhtml', 'formValid', 'errors'));

}else{

redirectTo('');
        }

    }

    public function signup(){
        
            if((!isset($_SESSION['user'])) || (!isset($_SESSION['admin']))){

                $form = new Form($_POST);

            $form->input("text", 'pseudo','Ton pseudo')->required()->min(5)->max(25)
                ->input('text', "email", "Ton e-mail")->required()->is_email()
                ->input('password', "password", "Ton mot de passe")->required()->min(8)
                ->input('password', "password2", "Confirmation de ton mot de passe")->required()

                ->submit('S\'inscrire');

            $formhtml = $form->getForm();

            $formValid  = false;
            $errors     = false; 

            // si le formulaire est validé 

                
                        if($form->valid()){
                            
                            $formValid = true;

                            $register = User::register();

                            if($register === true){

                                    redirectTo('login');

                            }else{

                                $errors = $register;    
                            }                            
                        }else{

                        $errors = $form->displayErrors();

                        }
            }
   view('pages.signup', compact('formhtml', 'errors', 'formValid'));
}



    public function logout(){
        User::logout();
        redirectTo('login');

    }


    public function show($id){
        $site = Site::findOne($id);
        $tags = Site::tagsAssocies($id);
        $images = Site::findMedias($id);

        view('site.onesite', compact('site','tags','images'));
    }


//créer la page pour afficher en view (dans un doss tag à créer) ex: sitebytag.php
    public function allSitesByTag($id, $slug){
        $sitesbytag = Tags::sitesByTag($id);

        view('tag.sitesbytag', compact('sitesbytag'));
    }

    

}