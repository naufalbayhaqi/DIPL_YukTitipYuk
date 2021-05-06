<?php 
<!-- mengembalikan nilai fungsi berupa variable koneksi Ke mySQL -->
$koneksi = mysqli_connect("localhost","root","","yuktitipyuk");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
