<?php

class Recherche {

    public function search(){
        $form = new Form($_GET);
        $form->input("text", 'query','Recherche')->required()
             ->submit('rechercher');

    $formhtml = $form->getForm();

    $formValid  = false;
    $errors     = false; 

    // si le formulaire est validé 
    if($data = $form->valid()){



        // formulaire valide
        $formValid = true;

        $nom = Site::findByName();
        $tag = Site::finByTag();
        // var_dump($nom,$tag);
        // Enregistrement des données

    } else {
        // affichage des erreurs 
        $errors =  $form->displayErrors();
        
    }

    view('pages.allsite', compact('formhtml', 'formValid', 'errors'));
    // view('site.allsite', compact('formhtml', 'formValid', 'errors'));
    // view('site.onesite', compact('formhtml', 'formValid', 'errors'));


}

}

?>