
<?php

header("Access-Control-Allow-Origin: *");	
ini_set('display_errors', 0);

// récupère les données envoyés à travers le json
$jsonInput = file_get_contents("php://input");
$data = json_decode($jsonInput);

 // 0 : n'affiche pas des erreurs, 1 : les affiche
 ini_set("display_errors",1);

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "projet_bdd_esirem";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 if($conn->connect_error) {
     die("Connection failed : ".$conn->connect_error);
 }
 
 $conn->set_charset('utf8');