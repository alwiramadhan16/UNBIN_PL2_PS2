<h1>Tambah Mahasiswa</h2>
<a href="index.php?id=<?php echo base64_encode(1) ?>"><span>< Kembali</span></a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    if(isset($_POST['proses']))
    {
        // echo var_dump($_POST['nama']);

        $query = mysqli_query($con,"insert into mahasiswa (npm, nama) values('".$_POST['npm']."','".$_POST['nama']."')");
        
        header("location:index.php?id=".base64_encode(1));
    }
?>
<form action="" method="POST">
    <input type="text" name="npm" placeholder="npm">
    <input type="text" name="nama" placeholder="nama">
    <input type="submit" name="proses" value="Simpan">
</form>