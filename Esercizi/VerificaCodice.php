<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Verifica Codice</title>
  </head>
  <body>
    <?php
    /*Se esiste querty */
     if (isset($_POST['codice'])&&$_POST['codice']=="QWERTY") {
      header("location: login.php")
    }else {
      echo "<h1>Password ERRATA</h1>";
      echo "<a href='index.php'>Clicca per riprovarci</a>";
    }

     ?>

  </body>
</html>
