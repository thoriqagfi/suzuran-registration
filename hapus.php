<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-siswa.php');
    } else {
        die("Failed to delete Data");
    }

} else {
    die("You dont have permission to delete data");
}

?>