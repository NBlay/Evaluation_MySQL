<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/main.css">
    <meta charset="utf-8">
    <title>Ajouter votre cyborg à notre BDD</title>
  </head>
  <body>
      <?php require_once 'templates/header.php' ?>

    <div class="formu">
      <form action="controllers/addOneCyborg.php" method="POST">
          <div>
              <label for="name">Son nom :</label>
              <input type="text" placeholder="Son nom" name="name" required>
          </div>
          <div>
              <label for="password"> Où est-il/elle apparu.e ? </label>
            <input type="text" placeholder="Est apparu dans.." name="appearances" required>
          </div>
          <div>
              <label for="password2"> Son créateur: </label>
            <input type="text" placeholder="Créé par.." name="creator" required>
          </div>
          <div>
              <label for="name">Description :</label>
              <textarea name="descri" rows="10" cols="30" placeholder="Une petite intro ?"></textarea>
          </div>
              <input type="submit" value="Ajouter votre cyborg" >
      </form>
    </div>

    <?php require_once 'templates/footer.php' ?>
  </body>
</html>
