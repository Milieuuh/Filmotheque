<?php
include('header.php');


///LECTURE

    $sql = "SELECT nomFilm, descriptionFilm, anneeSortie, duree, noteFilm from film";
   
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
            

            array_push($backToApp,$personnes);
        }
    }

    

echo json_encode($backToApp);


$conn->close();