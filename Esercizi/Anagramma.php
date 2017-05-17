
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Anagramma</title>
   </head>
<header>
  <h1>
    Programma Per Anagramma
  </h1>
</header>
   <body>
     <form class="form" action="#" method="post">
       <input type="text" name="Parola" value="">
       <input type="submit" name="ani" value="Trova">
     </form>
     <?php


        if (isset($_POST['ani'])) {
          if (isset($_POST['Parola'])) {
             $Parola =$_POST['Parola'];
        for ($i=0; $i <strlen($Parola) ; $i++) {

            $temp=substr($Parola,1);
            $temp=$temp.$Parola[0];
            $Parola=$temp;
            echo "Anagramma ".$Parola;
            echo "<br>";
          }

        }
       }
      ?>
   </body>
 </html>
