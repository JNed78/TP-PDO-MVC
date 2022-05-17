<?php 
class Auteur 
    {

        /**
         * numero du continent
         *
         * @var int
         */
    private $num;

    /**
     * nom de l'auteur
     *
     * @var string
     */
    private $nom;

    /**
     * Num continent (clé étrangère) relié a num de continent
     *
     * @var int
     */
    private $numContinent;


    private $prenom;

    /**
     * Get the value of num
     */ 
    public function getNum()
    {
    return $this->num;
    }

    /**
     * Lit le nom // anciennement libelle
     *
     * @return string
     */ 
    public function getNom() : string
    {
    return $this->nom;
    }


    /**
     * ecrit dans le nom // anciennement libelle
     *
     * @param string $nom
     * @return self
     */
    public function setNom(string $nom) : self
    {
    $this->nom = $nom;

    return $this;
    }
    
    /**
     * renvoie l'objet continent associé
     *
     * @return Auteur
     */
    public function getNumAuteur() : Auteur
    {
        return Auteur::findById($this->numAuteur);
    }

    /**
     * ecrit le num continent
     *
     * @param Auteur $continent
     * @return self
     */
    public function setNumContinent(Nationalite $nationalite) : self
    {
        $this->numNationalite = $nationalite->getNum();

        return $this;
    }

    /**
     * Retourne l'ensemble des Auteurs
     *
     * @return Auteur[] tableau d'objet nationalite
     */
    public static function findAll(?string $nom="",?string $prenom="",?string $continent="Tous") :array
    {
        $texteReq="select a.num, a.nom, a.prenom, c.libelle as 'libContinent' from (auteur a inner join nationalite n on a.numNationalite=n.num) inner join continent c on n.numContinent=c.num";
        if ($nom != "") 
        {
            $texteReq.=" and a.nom like '%" .$nom."%'";
        }
        if ($prenom != "")
        {
            $texteReq.=" and a.prenom like '%" .$prenom."%'";
        }
        if ($continent != "Tous") 
        {
            $texteReq.=" and c.num =" .$continent;
        }
        var_dump($texteReq);
        $req=MonPdo::getInstance()->prepare($texteReq);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        $lesResultats=$req->FetchAll();
        return $lesResultats;
    }

    /**
     * Trouve une nationalite par son num
     *
     * @param integer $id numero du Nationalite
     * @return Auteur objet nationalite trouvé
     */
    
    public static function findById(int $id) :Auteur
    {
        $req=MonPdo::getInstance()->prepare("Select * from auteur where num = :id");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Auteur');
        $req->bindParam(':id', $id);
        $req->execute();
        $Resultat=$req->Fetch();
        return $Resultat;
    }

    /**
     * Permet d'ajouter une nationalite
     *
     * @param Auteur $auteur nationalite a ajouter
     * @return integer resultat() 1 si l'opération a reussi,0 si non)
     */
    public static function add(Auteur $auteur) :int  
    {
        $req=MonPdo::getInstance()->prepare("insert into auteur(nom, prenom, num) values(:nom, :prenom, :num)");
        $noM=$auteur ->getNom();
        $prenom=$auteur->getPrenom();
        $num=$auteur ->getnumAuteur()->getNum();
        $req->bindParam(':nom', $noM);
        $req->bindParam(':numAuteur', $num);
        $req->bindParam(':prenom', $prenom);
        $nb=$req->execute();
        return $nb;
    }

    /**
     * Permet de modifier un continent 
     *
     * @param Auteur $auteur continent a modifier
     * @return integer resultat (1 si opération réussi, 0 si non)
     */
    public static function update(Auteur $auteur) :int 
    {
        $req=MonPdo::getInstance()->prepare("update auteur set nom= :nom, numAuteur= :numAuteur where num= :id");
        $aut = $auteur ->getNum();
        $noM = $auteur ->getNom();
        $numN = $auteur ->getNumAuteur()->getNum();
        $req->bindParam(':id', $auteur);
        $req->bindParam(':nom', $auteur);
        $req->bindParam(':numAuteur', $auteur);
        $nb=$req->execute();
        return $nb;
    }


    /**
     * Permet de supprimer une nationalite
     *
     * @param Auteur $auteur 
     * @return integer
     */
    public static function delete(Auteur $auteur) :int 
    {
        $req=MonPdo::getInstance()->prepare("delete from auteur where num = :id");
        $aut = $auteur ->getNum();
        $req->bindParam(':id', $auteur);
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

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}
?>