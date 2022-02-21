<?php
 include('navbar.php');

include('connect.php');
 include('reperation_data.php')
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
  <h1>Formulaire de contact</h1>
  <form action="" method="POST">
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="nom" placeholder="Votre nom ">
    <label for="fname"> prénom</label>
    <input type="text" id="fname" name="prenom" placeholder="Votre  prénom">

    <label for="sujet">Sujet</label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


    <label for="subject">Message</label>
    <textarea id="subject" name="message_" placeholder="Votre message" style="height:200px"></textarea>

    <input type="submit" value="Envoyer">
  </form>
</div>

    
</body>
</html>