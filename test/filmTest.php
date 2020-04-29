<?php
include('header.php');


///LECTURE

    $sql = "SELECT film.nomFilm, film.descriptionFilm, film.anneeSortie, film.duree, film.noteFilm, Realisateur.prenomRealisateur ,Realisateur.nomRealisateur from film JOIN RealiserFilm ON Film.idFilm= RealiserFilm.idFilm JOIN Realisateur ON RealiserFilm.idRealisateur = Realisateur.idRealisateur";
   
    $result = $conn->query($sql);


    $backToApp = Array();

    if($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
    
            $personnes['nomRealisateur']=$row['nomRealisateur'];            
            $personnes['prenomRealisateur']=$row['prenomRealisateur'];
            $personnes['nomFilm']=$row['nomFilm'];
            $personnes['descriptionFilm']=$row['descriptionFilm'];
            $personnes['anneeSortie']=$row['anneeSortie'];
            $personnes['duree']=$row['duree'];
            $personnes['noteFilm']=$row['noteFilm'];
            

            array_push($backToApp,$personnes);
        }
    }

    

echo json_encode($backToApp);


$conn->close();