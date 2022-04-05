<?php
include "config.php";

$id = "";

if(isset($_GET["delete"])){

    $id =$_GET["delete"];



// delete query
$link->query("DELETE FROM employee WHERE id=$id") or die($mysqli->error());
}

if($link){
header('Location:read.php');
    
}else {
    die(mysqli_error($link));

}

?>