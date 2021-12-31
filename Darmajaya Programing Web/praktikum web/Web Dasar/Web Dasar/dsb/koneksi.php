<?php
//simpanmhs.php
include"koneksi.php";
$npm=$_POST['npm'];
$nama=$_POST['nama'];
$sqlsimpan="INSERT INTO tblmhs(npm;nama)VALUES('$npm','$nama')";
Mysql_query($sqlsimpan);
?>