<?php
/**
 * RECHERCHE DES FILMS
 */

 class Recherche
 {
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    
    public function setDb($db)
    {
        $this->_db = $db;
    }

    public function getTitre($titre)
    {
        $titre = (string) $titre;
        $q = $this->_db->query('SELECT * from Film where titre='.$titre);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        $a = new Film($donnees);

        echo $q->bindValue(':nom', $a->getNom()).$q->bindValue(':id', $a->getId()); ;
    }
    public function Rechercher($nom)
    {

        $q = $this->_db->query('SELECT idFilm, titre,dateSortie, nationaliteFilm, duree,descriptionFilm,noteFilm FROM filmotheque.film 
                                WHERE filmotheque.titre = '.$nom);

        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        $a = new Film($donnees);

        echo $q->bindValue(':titre', $a->getTitre());
        return $a;
    }

 }
