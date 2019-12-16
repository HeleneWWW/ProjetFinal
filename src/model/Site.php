
<?php

class Site extends Db {

/**
 * Proprietés 
 */
protected $id;
protected $nom;
protected $slug;
protected $image;

/**
 * Constantes
 * Nous pouvons aussi définir des constantes. Ici, il s'agit du nom de la table. Ainsi, s'il venait à changer, nous n'aurons plus qu'à le changer à cet endroit.
 */
const TABLE_NAME = "sites";
const PRIMARY_KEY = "s_id";

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

 /**
 * CRUD Methods
 */




//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR AJOUTER UN SITE -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
public static function save($data) {

    $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);

    return $nouvelId;
}


//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR UPDATER UN SITE -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
public static function update($data, $id) {

    Db::dbUpdate(self::TABLE_NAME, 
                    $data, 
                    [self::PRIMARY_KEY => $id]);

    return;
}


//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR SUPPRIMER UN SITE -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
public static function delete($id) {

    Db::dbDelete(self::TABLE_NAME, [self::PRIMARY_KEY => $id ]);
    
    return;
}


//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR AVOIR LA LISTE DE TOUS LES SITES -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\
public static function findAll() {

    $bdd = Db::getDb();

    $query = $bdd->prepare('SELECT *
                        FROM '. self::TABLE_NAME);

    // je l'execute 
    $query->execute();

    // je retourne la liste d'articles
    return $query->fetchAll(PDO::FETCH_ASSOC);       
}


//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR TROUVER UN SITE par son id -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\


public static function findOne(int $id) {

    $bdd = Db::getDb();

    $query = $bdd->prepare('SELECT  * 
                            FROM '.self::TABLE_NAME.' 
                            WHERE sites.s_id = :id');

    // je l'execute 
    $query->execute([
        'id' => $id
    ]);

    // je retourne la liste d'articles
    return $query->fetch(PDO::FETCH_ASSOC);
}



//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR TROUVER LES SCREENSHOTS ASSOCIES A UN SITE -----------------------------------------\\
//---------------------------------------------------------------------------------------------------------\\

public static function findMedias(int $id) {

    $bdd = Db::getDb();

    $query = $bdd->prepare('SELECT *
                        FROM sites_media 
                        WHERE s_id = :id');

    // je l'execute 
    $query->execute([
        'id' => $id
    ]);

    // je retourne la liste d'articles
    return $query->fetchAll(PDO::FETCH_ASSOC);

}


//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR TROUVER LES TAGS ASSOCIES A UN SITE ---------------------\\
//---------------------------------------------------------------------------------------------------------\\


public static function tagsAssocies(int $id) {

    $bdd = Db::getDb();

    $query = $bdd->prepare('SELECT * 
                        FROM tags
                        INNER JOIN tag_site ON tag_site.t_id = tags.t_id
                        WHERE s_id = :id');

    // je l'execute 
    $query->execute([
        'id' => $id
    ]);

    // je retourne la liste d'articles
    return $query->fetchAll(PDO::FETCH_ASSOC);

}

//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR TROUVER DES SITES PAR TAG -------------------------------\\
//---------------------------------------------------------------------------------------------------------\\

public static function findByTag($search){
    $bdd = Db::getDb();
    $query = $bdd->prepare("SELECT sites.*,tags.* 
                            from sites 
                            INNER JOIN tag_site ON sites.s_id = tag_site.s_id
                            join tags ON tags.t_id = tag_site.t_id
                            WHERE tags.t_nom LIKE '%:search%'");
                            $query->execute([
                                'search' => $search
                            ]);
                            return $query->fetchAll(PDO::FETCH_ASSOC);
                            
}

//---------------------------------------------------------------------------------------------------------\\
// ------------------------------------------POUR TROUVER DES SITES PAR NOM -------------------------------\\
//---------------------------------------------------------------------------------------------------------\\

public static function findByName($name){
    $bdd = Db::getDb();
    $query = $bdd->prepare("SELECT sites.* 
                            from sites 
                            WHERE sites.s_nom LIKE '%:name%'");
                            $query->execute([
                                'name' => $name
                            ]);
                            return $query->fetchAll(PDO::FETCH_ASSOC);
                            
}


// public static function sameAs($id, $genre_id) {

//     $bdd = Db::getDb();

//     $query = $bdd->prepare('SELECT *
//                         FROM '. self::TABLE_NAME .'
//                         WHERE jv_id != :id
//                         AND genre_id = :genre
//                         ORDER BY RAND()
//                         LIMIT 0, 2');

//     // je l'execute 
//     $query->execute([
//         'id' => $id, 
//         'genre' => $genre_id
//     ]);

//     // je retourne la liste d'articles
//     return $query->fetchAll(PDO::FETCH_ASSOC);       
// }



/**
 * Get propietés
 */ 
public function getId()
{
    return $this->id;
}

/**
 * Set propietés
 *
 * @return  self
 */ 
public function setId($id)
{
    $this->id = $id;

    return $this;
}

/**
 * Get the value of nom
 */ 
public function getNom()
{
    return $this->nom;
}

/**
 * Set the value of nom
 *
 * @return  self
 */ 
public function setNom($nom)
{
    $this->nom = $nom;

    return $this;
}

/**
 * Get the value of slug
 */ 
public function getSlug()
{
    return $this->slug;
}

/**
 * Set the value of slug
 *
 * @return  self
 */ 
public function setSlug($slug)
{
    $this->slug = $slug;

    return $this;
}

/**
 * Get the value of image
 */ 
public function getImage()
{
    return $this->image;
}

/**
 * Set the value of image
 *
 * @return  self
 */ 
public function setImage($image)
{
    $this->image = $image;

    return $this;
}
}