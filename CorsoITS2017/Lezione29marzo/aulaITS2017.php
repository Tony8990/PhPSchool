<?php if (isset($_GET['queryDB'])):?>
<table class  
<?php foreach ($elencoStudenti as $studente): ?>
<tr>


          <td><?=$studente->nome?></td>
          <td><?=$studente->cognome?></td>
          <td><?=$studente->email?></td>
</tr>
<?php endforeach; ?>
<?php

include 'Contenitore.php';
include 'header.php';



 ?>
 <div class="container">
<?php if (isset($_GET['list'])):?>
<table class="table table-striped">
<thead>
<tr>
  <th>nome</th>
  <th>Cognome</th>
  <th>Email</th>
</tr>
</thead>
  <tbody>
    <?php foreach ($elencoStudenti as $studente): ?>
    <tr>


              <td><?=$studente->nome?></td>
              <td><?=$studente->cognome?></td>
              <td><?=$studente->email?></td>
  </tr>
<?php endforeach; ?>
  </tbody>

</table>
<?php endif; ?>
</div>

<?php include 'footer.php'; ?>
