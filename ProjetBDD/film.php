<?php
/**
 * Classe Film
 */

 class Film
 {
    //ATTRIBUTS
    private $idFilm; 
    private $titre; 
    private $duree; 
    private $descriptionFilm; 
    private $dateSortie; 
    private $noteFilm;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees) ;
    }




    /////////////////////////////////////////////////////:
    //GETTER
    public function  getIdFilm()
    {
        return $this->_idFilm ;
    }

    public function getTitre()
    {
        return $this->_titre ;
    }

    public function  getDuree()
    {
        return $this->_duree ;
    }

    public function  getNoteFilm()
    {
        return $this->_noteFilm ;
    }

    public function  getDescriptionFilm()
    {
        return $this->_descriptionFilm ;
    }

    public function  getDateSortie()
    {
        return $this->_dateSortie ;
    }

    //////////////////////////////////////////////////////////////////
    //SETTER
    
    public function  setIdFilm($idFilm)
    {
        $idFilm=(int) $idFilm;
        if ($idFilm>0)
        {
           $this->_idFilm=$idFilm;
        }
    }

    public function setTitre($titre)
    {
        $this->_titre=$titre;
    }

    public function setDateSortie($dateSortie)
    {
        $this->_dateSortie=$dateSortie;
    }

    public function setDuree($duree)
    {
        $this->_duree=$duree;
    }
    public function setNoteFilm($noteFilm)
    {
        $this->_noteFilm=$noteFilm;
    }

    public function setDescriptionFilm($descriptionFilm)
    {
        $this->_descriptionFilm=$descriptionFilm;
    }
    

    //METHODE HYDRATE = PERMET DDE FIXER EN UNE FOIS TOUS LES ATTRIBUTS DE LA CLASSE
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
             // On récupére le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

 }
