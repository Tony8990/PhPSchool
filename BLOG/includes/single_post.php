<?php
$post = isset($_REQUEST['idpost']) ? $_REQUEST['idpost'] : false;

if(isset($post))
     {
        $query="SELECT * FROM posts JOIN categorie ON categorie.idcategoria=posts.idcategoria WHERE idpost=".$_GET['idpost'];
     }
     
$elencoposts = $db->select($query);
?>

<div class="col-sm-8 blog-main">
    <?php $row=mysqli_fetch_array($elencoposts);  ?>
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
              <p><?= utf8_encode($row['testo']); ?></p>
              <p>
              <?php
                 echo "<a href='?view=update&idpost=".$row['idpost']."' class='btn btn-warning'>Modifica</a> ";
                 echo "<a href='?view=delete&idpost=".$row['idpost']."' class='btn btn-danger'>Elimina</a> ";
              ?>
              </p>
              <hr>
            </div><!-- /.blog-post -->
        </div>
    </div>
    
  <!--<nav>
     <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul> 
  </nav>-->

</div><!-- /.blog-main -->