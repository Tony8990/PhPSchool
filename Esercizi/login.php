<?php
$elencoUtenti=array('Pippo' => , );
if (isset($_POST['Utente'])&&isset($_POST['Password'])) {

}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Codice corretto :fai il Log</title>
  </head>
  <body>
    <h3>Inserisci i tuoi dati di login:</h3>
    <pre>
      Utente     Password

      Pippo      Pluto
      CAne       Gatto
      Pippo      Scimmia
      Pippo      Cobetto

    </pre>
    <form  action="login.php" method="post">
    <label>Utente:</label>
    <input type="text" name="Utente"/>
    <label>Password</label>
    <input type="password" name="Password"/>
    <button type="submit" value="Submit">Invia</button>
    <button type="reset">Reimposta</button>

    </form>
  </body>
</html>
