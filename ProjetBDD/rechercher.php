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
        $q = $this->_db->query('SELECT * from Film where UPPER(titre) LIKE'.$titre.'%');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        $a = new Film($donnees);

        echo $q->bindValue(':nom', $a->getNom()).$q->bindValue(':id', $a->getId()); ;
    }
    public function Rechercher($nom)
    {
        $nom = (string)$nom;
        $q = $this->_db->query('SELECT filmotheque.idFilm, filmotheque.titre,dateSortie, filmotheque.nationaliteFilm, filmotheque.duree, filmotheque.descriptionFilm, filmotheque.noteFilm FROM filmotheque.film  WHERE UPPER(filmotheque.titre) LIKE'.$nom.'%;');

        /*$donnees = $q->fetch(PDO::FETCH_ASSOC);

        $a = new Film($donnees);

        echo $q->bindValue(':titre', $a->getTitre());
        return $a;*/

        $titre = (string) $nom;
        $q = $this->_db->query('SELECT * from Film where UPPER(titre) LIKE'.$titre.'%');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        $a = new Film($donnees);

        return $this->d;
    }

 }
