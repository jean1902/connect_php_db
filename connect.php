<?php
        include('reperation_data.php');
        $bd = "db_crud";
        $user= "root";
        $password ="";
        $dns = "mysql:host=localhost; dbname=db_crud";

    try{

        $connexion =new PDO($dns ,$user ,$password);
        
        $createSql = "INSERT INTO `user_crud` (nom ,prenom ,sujet,email, message) VALUES('$nom ','$prenom','$sujet','$email','$message')";

        $reponse =$connexion->query($createSql);
    
        while($donnees=$reponse->fetch()){
            echo $donnees[$nom];
        };
        $reponse->closeCursor();
        echo "sa marche";


    }catch(Exception $e){
        die('Erreur:'.$e->getMessage());
    }