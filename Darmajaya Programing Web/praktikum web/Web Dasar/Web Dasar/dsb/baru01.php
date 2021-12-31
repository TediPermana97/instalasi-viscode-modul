<?php
include "koneksi.php";
If(isset($_POST['simpan'])) {
$npm    = $_POST['npm'];
$nama   = $_POST['nama'];
$qinsert = "INSERT INTO tblmhs(npm,nama) VALUES ('$npm','$nama')";
$simpan = mysql_query($qinsert);
If(!$simpan)
{
 echo "data tidak tersimpan";
}
Else
{
Echo "data Telah tersimpan";
}
}
