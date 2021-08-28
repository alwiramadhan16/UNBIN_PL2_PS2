<?php 
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id     = $_GET['id'];

    mysqli_query($con,"delete from mahasiswa where id='$id'");
    header("location:index.php?id=".base64_encode(1));

?>