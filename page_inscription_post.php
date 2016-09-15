<?php

// inclusion de la connexion à la base de données
include 'connect.php';
ini_set ('display_error',1);

// création de variables avec les $_POST :

// pour les inscriptions
$pseudo = $_POST['pseudo'];
$passwd = $_POST['passwd'];
$confPasswd = $_POST['confPasswd'];
$email = $_POST['email'];



// REQUETE FORMULAIRE D'INSCRIPTION

// vérifier que les champs du formulaire d'inscriptions ont été renseignés

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

// vérification de la validité de l'adresse mail
if (isset($email))

{
    $email = htmlspecialchars($email); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
    {
        echo 'L\'adresse ' . $email . ' est <strong>valide</strong> !';
    }
    else
    {
        echo 'L\'adresse ' . $email . ' n\'est pas valide, recommencez !';
    }
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
