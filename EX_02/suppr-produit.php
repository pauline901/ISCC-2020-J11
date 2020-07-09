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

            $sql = "DELETE FROM produit
            WHERE nom='T-shirt noir'";

            $pdo->exec($sql);
            echo "Entrée supprimée dans la table";
    }
catch(PDOException $e) 
     {
         echo "<p><b>Vous n'êtes pas connecté</b></p>".$e->getMessage();
     }

    }

    $pdo = connect_to_database();

?>