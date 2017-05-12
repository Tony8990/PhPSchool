<?php
$categoria = isset($_REQUEST['idcat']) ? $_REQUEST['idcat'] : false;
$order = " ORDER BY data DESC";
if ($categoria)
    $query = "SELECT * FROM posts JOIN categorie ON categorie.idcategoria=posts.idcategoria WHERE posts.idcategoria=" . $categoria . $order;
else
    $query = "SELECT * FROM posts JOIN categorie ON categorie.idcategoria=posts.idcategoria" . $order;

$elencoposts = $db->select($query);
?>

<div class="col-sm-8 blog-main">
    <?php while($row=mysqli_fetch_array($elencoposts)) :  ?>
    <div class="media">
        <div class="media-left">
            <?php
            echo "<img width='50px' class='media-object' src='";
            if($row['immagine'])
                echo $row['immagine'];
            else
                echo "http://www.freeiconspng.com/uploads/no-image-icon-15.png";
            echo "' alt='".$row['titolo']."'>";
            ?>
        </div>
        <div class="media-body">
            <div class="blog-post">
              <h2 class="blog-post-title">
                <?= utf8_encode($row['titolo']); ?>
              </h2>
              <h3>
                <?= utf8_encode($row['sottotitolo']); ?>
              </h3>
                <p class="blog-post-meta"><?= formattaData($row['data'])." - ".strtoupper($row['categoria']); ?>
              </p>
              <p>
                <?php
                echo utf8_encode(substr($row['testo'], 0, 150));
                if(utf8_encode(strlen($row['testo'])>150))
                    echo " ...";
                ?>
              </p>
              <p>
              <?php
                 echo "<a href='?view=single&idpost=".$row['idpost']."' class='btn btn-primary'>Leggi tutto</a> ";
                 echo "<a href='?view=update&idpost=".$row['idpost']."' class='btn btn-warning'>Modifica</a> ";
                 echo "<a href='?view=delete&idpost=".$row['idpost']."' class='btn btn-danger'>Elimina</a> ";
              ?>
              </p>
              <hr>
            </div><!-- /.blog-post -->
        </div>
    </div>
    <?php endwhile; ?>
  <!-- nav originale -->
  <!--<nav>
     <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul> 
  </nav>-->
  
  <!-- paginazione -->
  <!-- <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav> -->
  
</div><!-- /.blog-main -->