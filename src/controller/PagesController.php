<?php

// PagesController.php

class PagesController {

    /* Page d'acceuil  */ 
    public function home() {

        // données à récuperer de mon model 
        $data = 'Il faut faire la page d\'accueil!';
        view('pages.home', compact('data'));
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

        $form = new Form($_POST);

        $form->input("select", 'civilite', 'Civilité', [1=>'M', 2=>'Mme', 3=>'Mlle'])->required()
            ->input('text', "nom", "Nom")->required()
            ->input('text', "prenom", "Prénom")->required()
            ->input('text', "email", "E-mail")->required()
            ->input('textarea', "message", "Message")->required()
            ->submit('enregistrer');

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
// var_dump($_POST);

   $info = User::connect($_POST['pseudo'], $_POST['password']);
            // var_dump($info);
        if ($info){
            // redirectTo('');
        }
     } else {
         
        // affichage des erreurs 
        $errors =  $form->displayErrors();
    }

    // vue de la page contact 
        view('pages.login', compact('formhtml', 'formValid', 'errors', 'info'));

}else{

redirectTo('');
        }

    }

    public function signin(){
        


    }




    public function logout(){
        User::logout();
        redirectTo('login');

    }


    public function show($id){
        $site = Site::findOne($id);
// var_dump($site);
        view('site.onesite', compact('site'));
    }

}