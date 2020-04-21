<?php
    session_start() ;
?>

<html>
<head>
    <title> FILMOTHEQUE </title>
</head>
    <body>
        <form action="index.php" method="POST">
            RECHERCHER UN FILM : <br/>
            ------------------------------------------- <br/>
            Titre : <input type='text' name='titre' /><br/>
           
            <input type='submit' name='submit' value='OK' />

        </form>

        <?php
           // include_once('header.php');
            include_once ('film.php');
            //include_once ('rechercher.php');

            /*if(!empty($_POST['submit'])){
                $film = new Recherche($db) ;
                $film->rechercher($_POST['titre']);
            }*/

        ?>

    </body>
</html>
