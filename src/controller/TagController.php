<?php

class TagController {

    protected $id;
    protected $nom;
    protected $slug;
    protected $logo;

    /**
     * Constantes
     * Nous pouvons aussi définir des constantes. Ici, il s'agit du nom de la table. Ainsi, s'il venait à changer, nous n'aurons plus qu'à le changer à cet endroit.
     */
    const TABLE_NAME = "tags";
    const PRIMARY_KEY = "t_img";

    /**
     * Méthodes magiques
     */
    public function __construct( $id = null ) {
    
        /**
         * Pour chaque argument, on utilise les Setters pour attribuer la valeur à l'objet.
         * Pour appeler une méthode non statique de la classe DANS la classe, on utilise $this.
         */
        if ( $id != null ) {
            $this->setId($id);
        }
    }

    public static function findOneTag() {

        $bdd = Db::getDb();
    
        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME);
    
        // je l'execute 
        $query->execute();
    
        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);       
    }

    
}