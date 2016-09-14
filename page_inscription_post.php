<?php

// inclusion de la connexion à la base de données
include 'connect.php';
ini_set ('display_error',1);

// création de variables avec les $_POST
$pseudo = $_POST['pseudo'];
$passwd = $_POST['passwd'];
$confPasswd = $_POST['confPasswd'];
$email = $_POST['email'];


// vérifier que les champs ont été renseignés

if (!isset($pseudo) || empty($pseudo))
{
  echo 'Veuillez entrer votre pseudo&#8239!<br/>';
}

if (!isset($passwd) || empty($passwd))
{
  echo 'Veuillez entrer votre mot de passe&#8239!<br/>';
}

if (!isset($confPasswd) || empty($confPasswd))
{
  echo 'Veuillez confirmer votre mot de passe&#8239!<br/>';
}

if (!isset($email) || empty($email))
{
  echo 'Veuillez entrer une adresse mail&#8239!<br/>';
}

else {
  // hachage du mot de passe
  $pass_hache = sha1('gz'.$passwd);

// insérer les données dans la base de données

  $req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email, date_inscription)
  VALUES (:pseudo,:pass,:email, CURDATE())');
  $req->execute(array(
    'pseudo'=> $pseudo,
    'pass'=> $pass_hache,
    'email'=> $email));

  $req->closeCursor();

  header('Location:page_profil.php');
}







 ?>
