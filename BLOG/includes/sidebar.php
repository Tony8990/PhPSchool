<?php
$query="SELECT * FROM categorie ORDER BY categoria";
$elencocategorie = $db->select($query);
?>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <!-- <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p> -->
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                <?php while($row=mysqli_fetch_array($elencocategorie))
                      {
                        echo "<li><a href='categorie.php?idcat=".$row['idcategoria']."'>".strtoupper($row['categoria'])."</a></li>";
                      }  
                ?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li>
                  <a href="http://getbootstrap.com/examples/blog/#">GitHub</a>
              </li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->