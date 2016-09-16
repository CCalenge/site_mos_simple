<?php
// inclusion de la connexion à la base de données
include 'connect.php';
ini_set ('display_error',1);

// création de variables avec les $_POST :

// pour les membres
$login = $_POST['login'];
$mdp = $_POST['mdp'];

// REQUETE FORMULAIRE DE CONNEXION

// Vérifier que les champs du formulaire des membres ont été renseignés

if (!isset($login) || empty($login))
{
  echo 'Veuillez entrer votre pseudo&#8239!<br/>';
}

if (!isset($mdp) || empty($mdp))
{
  echo 'Veuillez entrer votre mot de passe&#8239!<br/>';
}

else {

  // Vérification dans la base de données
  # code...

    header('Location:page_profil.php');
}
// Si le login est faux : êtes-vous inscrit ?

// direction vers accueil membres.



 ?>
