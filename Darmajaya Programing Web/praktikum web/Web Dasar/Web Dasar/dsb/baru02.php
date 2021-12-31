<?php
if(isset(['button']);
{
include "koneksi.php";
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$qsave = "INSERT INTO tblmhs(npm,nama) VALUES ('$npm','$nama')";
$qproses = mysql_query($qsave); //proses simpan
If(!$qproses)
{
echo "data tidak tersimpan";
}
Else
{
echo "data sudah tersimpan";
}
}
?>
