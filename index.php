<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>
    <?php
      if (isset($_POST['list']) AND isset($_POST['lastname']) AND isset($_POST['firstname']) AND isset($_FILES['file']) AND $_FILES['file']['error'] == 0)
      {
        $filesInfo = pathinfo($_FILES['file']['name']);
        $extentionUp = $filesInfo['extension'];
        $extentionValid = array('pdf');
        if (in_array($extentionUp, $extentionValid))
        {
          echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' ' . $_FILES['file']['name'];
        } else {
          echo 'Le fichier n\'a pas au bon format';
        }
      } else
        {
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
          <label for="civility">Civilité</label>
          <select name="civility">
            <option value="M">M</option>
            <option value="Mme">Mme</option>
          </select>
          <label for="lastname">Nom</label><input type="text" name="lastname">
          <label for="firstname">Prénom</label><input type="text" name="firstname">
          <label for="file">Fichier</label><input type="file" name="file">
          <input type="submit" name="button" value="Valider">
        </form>
        <?php ;
      }
     ?>
   </p>
  </body>
</html>
