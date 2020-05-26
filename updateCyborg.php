<?php require 'controllers/getOneCyborg.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/main.css">
        <title>mettre à jour votre cyborg: </title>
    </head>
    <body>
        <?php require_once 'templates/header.php' ?>
        <main>
            <div class="formu" id='inscription'>
              <form class="" action="controllers/updateOneCyborg.php" method="post">
                    <div>
                        <label for="name">Le nom du cyborg: </label>
                        <input type="text" placeholder="Nom" name="name" value="<?= $user['name']?>" required>
                    </div>
                    <div>
                        <label for="name">Où a-t-on vu ce.tte cyborg: </label>
                        <input type="text" placeholder="Où" name="appearances" value="<?= $user['name']?>" required>
                    </div>
                    <div>
                        <label for="name">Son créateur ? </label>
                        <input type="text" placeholder="créateur" name="creator" value="<?= $user['name']?>" required>
                    </div>
                    <div>
                        <label for="name">Description :</label>
                        <textarea name="description" rows="10" cols="30"></textarea>
                    </div>
                        <input id='enter' type="submit" value="Mettre le cyborg à jour:" >
              </form>
            </div>
        </main>
        <?php require_once 'templates/footer.php' ?>
    </body>
</html>
