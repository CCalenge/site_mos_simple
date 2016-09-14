<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>page d'inscription</title>
  </head>
  <body>
    <h1>Bienvenue à la Manche Open school</h1>



<h3>Vous êtes déjà membre&#8239:</h3><br/>
<!-- formulaire de connexion pour les membres -->

<form class="login" action="page_inscription_post.php" method="post">
  <p>
    <label for="login">Entrez votre pseudo&#8239: </label><input type="text" name="login"><br/>
    <label for="mdp">Entrez votre mot de passe&#8239: </label><input type="passwd" name="mdp"><br/>
    <input type="submit" value="Envoyez"><br/>
  </p>

</form>



<h3>Vous n'êtes pas encore membre&#8239:</h3><br/>

<!-- formulaire d'inscription. Les données sont transmises à la base de données -->

    <form class="formulaire" action="page_inscription_post.php" method="post">
      <p>
        <label for="pseudo">Entrez votre pseudo&#8239: </label><input type="text" name="pseudo"><br/>

        <label for="passwd">Entrez votre mot de passe&#8239: </label><input type="password" name="passwd"><br/>

        <label for="confPassword">Confirmez votre mot de passe&#8239: </label><input type="password" name="confPasswd"><br/>

        <label for="email">Entrez votre adresse mail&#8239: </label><input type="text" name="email"><br/>

        <input type="submit" value="Envoyez">
      </p>

    </form>
  </body>
</html>
