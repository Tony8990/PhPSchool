<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Equazione</title>
  </head>
  <body>
    <h1 style="text-align: center">Risoluzione Equazione 2grado </h1>
    <form action="#" method="post">
      <input type="text" name="a" value="">
      <input type="text" name="b" value="">
      <input type="text" name="c" value="">
      <input type="submit" name="Risolvi" value="Risolvi">
    </form>
  </body>
</html>
<?php
if (isset($_POST['a'])&&isset($_POST['b'])&&isset($_POST['c'])) {
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

  if (isset($_POST['Risolvi'])) {
    $risultato1=((-1)*$b+sqrt($b*$b-4*$a*$c))/(2*$a);
    $risultato2=((-1)*$b-sqrt($b*$b-4*$a*$c))/(2*$a);
if ($a!=0) {
  echo "IL 1 Risutato"."\n".$risultato1;
  echo "<br>";
  echo "IL 2 Risutato"."\n".$risultato2;

}
else {
  echo "Impossibile risolverla";
}

  }
}
 ?>
