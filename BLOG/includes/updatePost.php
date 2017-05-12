<?php
if(isset($_POST['btnInserisci']))
{
    $titolo= mysqli_real_escape_string($db->link, $_POST['titolo']);
    $sottotitolo=mysqli_real_escape_string($db->link, $_POST['sottotitolo']);
    $testo=mysqli_real_escape_string($db->link, $_POST['testo']);
    $categoria=mysqli_real_escape_string($db->link, $_POST['categoria']);
    
    if(!empty($titolo) && !empty($sottotitolo) && !empty($testo) && !empty($categoria))
    {
        if(isset($_POST['immagine']))
            $immagine=$_POST['immagine'];
        else $immagine="";
        $query="INSERT INTO posts (titolo, sottotitolo, testo, idcategoria, immagine, data) "
                . "VALUES('".$titolo."', '".$sottotitolo."', '".$testo."', '".$categoria."', '".$immagine."', NOW())";
        $db->insert($query);
    }
}

if(isset($_REQUEST['idpost']))
    $id=$_REQUEST['idpost']);

$querypost="SELECT * FROM posts WHERE idpost=".$id;
$querycat="SELECT * FROM categorie ORDER BY categoria";
$elencocategorie = $db->select($querycat);
$post = $db->select($querypost);
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>?view=insert">
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <?php $rowpost=mysqli_fetch_array($post) ?>
            <div class="form-group">
              <label for="titolo">Titolo</label>
              <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Titolo" value="<?= $rowpost['titolo'] ?>">
            </div>
            <div class="form-group">
              <label for="sottotitolo">Sottotitolo</label>
              <input type="text" class="form-control" id="sottotitolo" name="sottotitolo" placeholder="Sottotitolo" value="<?= $rowpost['sottotitolo'] ?>">
            </div>
            <div class="form-group">
              <label for="testo">Testo</label>
              <textarea class="form-control" id="testo" name="testo" placeholder="Testo" rows="3" value="<?= $rowpost['testo'] ?>"></textarea>
            </div>
            <div class="form-group">
                <img width="50px" src="<?= $rowpost['immagine'] ?>"/>
              <label for="immagine">Immagine</label>
              <input type="file" id="immagine" name="immagine">
            </div>
            <div class="checkbox">
                <select class="form-control" name="categoria">
                    <option value="0">Seleziona una categoria</option>
                    <?php while($row=mysqli_fetch_array($elencocategorie))
                      {
                        echo "<option value='".$row['idcategoria']."'>".strtoupper($row['categoria'])."</option>";
                      }  
                ?>
                </select>
            </div>
            <button type="submit" name="btnInserisci" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>