<?php



class Tags extends Db{

    protected $id;
    protected $nom;
    protected $slug;
    protected $image;
    
    /**
     * Constantes
     * Nous pouvons aussi définir des constantes. Ici, il s'agit du nom de la table. Ainsi, s'il venait à changer, nous n'aurons plus qu'à le changer à cet endroit.
     */
    const TABLE_NAME = "tags";
    const PRIMARY_KEY = "t_id";
    
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

    public static function findAllTags() {

        $bdd = Db::getDb();
    
        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME);
    
        // je l'execute 
        $query->execute();
    
        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);       
    }

    public static function getAllSelect() {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME);

        // je l'execute 
        $query->execute();

        $tags = $query->fetchAll(PDO::FETCH_ASSOC);

        $tagSelect = [];
        foreach ($tags as $key => $value) {
            //grace au foreach : g_id est la clé de mon tableau et g_nom est la valeur
            $tagSelect[$value['t_id']] = $value['t_nom'];
        }

        // je retourne la liste d'articles
        return $tagSelect;     
    }


}