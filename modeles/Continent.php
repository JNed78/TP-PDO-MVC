<?php 
class Continent 
    {

        /**
         * numero du continent
         *
         * @var int
         */
    private $num;

    /**
     * Libelle du continent
     *
     * @var string
     */
    private $libelle;


    /**
     * Undocumented function
     *
     * @return void
     */ 
    public function getNum()
    {
    return $this->num;
    }

    /**
     * Lit le libellé
     *
     * @return string
     */ 
    public function getLibelle() : string 
    {
    return $this->libelle;
    }

    /**
     * ecrit dans le libellé
     *
     * @param string $libelle
     * @return self
     */
    public function setLibelle(string $libelle) : self
    {
    $this->libelle = $libelle;

    return $this;
    }

    /**
     * Retourne l'ensemble des continents
     *
     * @return Continent[] tableau d'objet continent
     */
    public static function findAll() : Array
    {
        $req=MonPdo::getInstance()->prepare("Select * from continent");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Continent');
        $req->execute();
        $lesResultats=$req->FetchAll();
        return $lesResultats;
    }

    /**
     * Trouve un continent par son num
     *
     * @param integer $id numero du continent
     * @return Continent objet continent trouvé
     */
    public static function findById(int $id) :Continent
    {
        $req=MonPdo::getInstance()->prepare("Select * from continent where num = :id");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Continent');
        $req->bindParam(':id', $id);
        $req->execute();
        $Resultat=$req->Fetch();
        return $Resultat;
    }

    /**
     * Permet d'ajouter un continent
     *
     * @param Continent $continent continent a ajouter
     * @return integer resultat() 1 si l'opération a reussi,0 si non)
     */
    public static function add(Continent $continent) :int  
    {
        $req=MonPdo::getInstance()->prepare("insert into continent(libelle) values(:libelle)");
        $lib = $continent ->getLibelle();
        $req->bindParam(':libelle', $lib);
        $nb=$req->execute();
        return $nb;
    }

    /**
     * Permet de modifier un continent 
     *
     * @param Continent $continent continent a modifier
     * @return integer resultat (1 si opération réussi, 0 si non)
     */
    public static function update(Continent $continent) :int 
    {
        $req=MonPdo::getInstance()->prepare("update continent set libelle= :libelle where num= :id");
        $num = $continent ->getNum();
        $lib = $continent ->getLibelle();
        $req->bindParam(':id', $num);
        $req->bindParam(':libelle', $lib);
        $nb=$req->execute();
        return $nb;
    }

    /**
     * Permet de supprimer un continent
     *
     * @param Continent $continent 
     * @return integer
     */
    public static function delete(Continent $continent) :int 
    {
        $req=MonPdo::getInstance()->prepare("delete from continent where num = :id");
        $num = $continent ->getNum();
        $req->bindParam(':id', $num);
        $nb=$req->execute();
        return $nb;
    }

    /**
     * Set numero du continent
     *
     * @param  int  $num  numero du continent
     *
     * @return  self
     */ 
    public function setNum(int $num) :self
    {
        $this->num = $num;

        return $this;
    }
}
?>