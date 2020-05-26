<?php require './controllers/getAllCyborgs.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Les cyborgs du mois :</title>
  </head>
  <body>
      <?php require_once 'templates/header.php' ?>
    <main>
      <h1 class="welcome">Cyborgs du mois</h1>
        <div class="flex">
          <table class="col-name">
            <tr style="background-color:grey">
              <th>Nom</th>
              <th>Apparitions</th>
              <th>Créateur</th>
              <th>Présentation</th>
            </tr>

            <?php foreach ($eval as $value): ?>
                <tr >
                    <td><?= $eval["Name"]=$value["Name"]; ?></td>
                    <td><?= $eval['Appearances']=$value['Appearances']; ?></td>
                    <td><?= $eval['Creator']=$value['Creator']; ?></td>
                    <td><?= $eval['Description']=$value['Description']; ?></td>
                    <td>
                        <form action="controllers/EraseOneCyborg.php" method="post">
                            <input type="hidden" name="ID" value="<?= $value['ID'] ?>">
                            <input type="submit" value="DEL">
                        </form>
                    </td>
                    <td>
                        <form action="updateCyborg.php" method="post">
                            <input type="hidden" name="ID" value="<?= $value['ID'] ?>">
                            <input type="submit" value="MàJ">
                        </form>
                    </td>
                </tr>

            <?php endforeach ?>

          </table>
        </div>
    </main>
      <?php require_once 'templates/footer.php' ?>

  </body>
</html>
