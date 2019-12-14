<?php 
    class AdminController {

public function __construct(){
    //redirection de l'utilisateur s'il n'est pas connecté
    if(!isset($_SESSION['admin'])){
        redirectTo('');
            }else{
                
            }
    
}



        public function allSite() {
            // appel a la BDD 
            $sites = Site::findAll();
            // $tags = Site::findOne();


          
            view('admin.allsites', compact('sites'));
        }
        

        public function show($id) {
            
            view('exemple.all');
        }

//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR AJOUTER UN SITE -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
        public function addSite(){
            
                $form = new Form($_POST);
                // $tags = Tags::getAllSelect();

                // var_dump($tags);
                $form->input('text', "nom", "Nom du site")->required()
                    ->input('text', "image", "Image du site")
                    ->input('text', "url", "Url du site")->required()
                    ->input('textarea', "description", "Description")->required()
                    // ->input('checkbox', 'tags', "Tags", $tags)   //->required()
                    ->submit('Enregistrer');
        
                $formulaireHtml = $form->getForm();
        
                $formValid  = false;
                $errors     = false; 
        
                // si le formulaire est validé 
                if (!empty($_POST)) {
                    
                    if($data = $form->valid()){
        // var_dump($data);
                        // formulaire valide
                        $formValid = true;
                    
                        // Enregistrement des données
                      $id = Site::save([
                            "s_nom"     => $data['nom'],
                            "s_slug"    => slugify($data['nom']),
                            "s_url"   => $data['url'],
                            "s_imgindex"   => $data['image'],
                            "s_description"   => $data['description']
                            // 's_id'   => $data['tags']
                        ]);


                        // redirection apres ajout en BDD 
                        // redirectTo('site/'.$id.'/'.slugify($data['nom']));

                        //redirection pendant le developpement
                        redirectTo('admin/site/add');

                    } else {
                        // affichage des erreurs 
                        $errors =  $form->displayErrors();
                    }
                }
                
                // vue de la page contact 
                view('admin.addsite', compact('formulaireHtml','errors'));
   
        }

//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR UPDATER UN SITE -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\


        public function updateSite($id){

            $form = new Form($_POST);
            $tags = Tags::getAllSelect();

            // var_dump($tags);
            $form->input('text', "nom", "Nom du site")->required()
                ->input('text', "image", "Image du site")
                ->input('text', "url", "Url du site")->required()
                ->input('textarea', "description", "Description")->required()
                ->input('checkbox', 'tags', "Tags", $tags)   //->required()
                ->submit('Enregistrer');
    
            $formulaireHtml = $form->getForm();
    
            $formValid  = false;
            $errors     = false; 

            // si le formulaire est validé 
            if (!empty($_POST)) {
                
                if( $form->valid()){
    
                    // formulaire valide
                    $formValid = true;
                
                    // Enregistrement des données
                    Jeuvideo::update([
                        "jv_nom"     => $_POST['jv_nom'],
                        "jv_slug"    => slugify($_POST['jv_nom']),
                        "jv_image"   => $_POST['jv_image']
                    ], $id);
    
                    // redirection apres ajout en BDD 
                    redirectTo('jeuvideo/'.$id.'/'.slugify($_POST['jv_nom']));
    
                } else {
                    // affichage des erreurs 
                    $errors =  $form->displayErrors();
                }
            }
            
            // vue de la page contact 
            view('admin.addjeuvideo', compact('formulaireHtml','errors'));
        }
    
        public function deleteJeuvideo($id){

            Jeuvideo::delete($id);
            $_SESSION['delete'] = true;
            redirectTo('admin');
        }
    }