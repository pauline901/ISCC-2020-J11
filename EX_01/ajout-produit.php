<?php

function connect_to_database() 
{
    $severname="localhost";
    $username="root";
    $password="";
    $databasename="basetest01";


try
    {
        $pdo= new PDO("mysql:host=$severname;dbname=$databasename",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "<p><b>Vous êtes connecté</b></p>";

            $sql = "INSERT INTO produit
            VALUES(8,'T-shirt noir','T-shirt en coton de couleur noire',15.50,10)";

            $pdo->exec($sql);
            echo "Entrée ajoutée dans la table";
    }
catch(PDOException $e) 
     {
         echo "<b>Vous n'êtes pas connecté</b>".$e->getMessage();
     }

    }

    $pdo = connect_to_database();

?>