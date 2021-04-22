<?php 
include 'koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$nama = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"update user set alamat='$alamat', no_hp='$no_hp', nama='$nama', email='$email' where username='$username'");

?>