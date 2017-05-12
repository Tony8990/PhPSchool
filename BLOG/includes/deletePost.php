<?php
if(!$_SESSION['admin'])
    die("non puoi eliminare!");

$id=$_REQUEST['idpost'];
$query ="DELETE FROM posts WHERE idpost=".$id;
$db->delete($query);
?>