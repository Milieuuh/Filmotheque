<?php
include('header.php');


///LECTURE
    if($nom!="")
    {
        $sql = "SELECT nomFilm, descriptionFilm, anneeSortie, duree, noteFilm from film WHERE UPPER(titre) LIKE'.$nom.'%;'";
    }
    else
    {
        $sql = "SELECT nomFilm, descriptionFilm, anneeSortie, duree, noteFilm from film";
    }


    $result = $conn->query($sql);


    $backToApp = Array();

    if($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
    
            $personnes['nomFilm']=$row['nomFilm'];
            $personnes['descriptionFilm']=$row['descriptionFilm'];
            $personnes['anneeSortie']=$row['anneeSortie'];
            $personnes['duree']=$row['duree'];
            $personnes['noteFilm']=$row['noteFilm'];

            echo($personnes['nomFilm']);
            echo(" - ");
            echo($personnes['noteFilm']);
            echo("/5");
            echo("<br/>");
            echo($personnes['anneeSortie']);
            echo("<br/>");
            echo($personnes['duree']);
            echo("<br/>");
            echo($personnes['descriptionFilm']);
            echo("...<br/>______________________________<br/><br/><br/>");
            

            array_push($backToApp,$personnes);
        }
    }