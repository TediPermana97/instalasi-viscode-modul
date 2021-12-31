<?php include("../Danung/config.php"); 
 
if($_GET['register'])
{
include("../Danung/daftar.php");
exit;
}
 
if($_GET['register2'])
{
include("../Danung/daftar2.php");
exit;
}
 
if($_GET['login'])
{
include("../Danung/login.php");
exit;
}
?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #0000FF}
-->
</style>
<p>
<?php
if($_GET['logout'])
{
print "Anda telah berhasil logout !<p>";
}
?>Welcome
<?php
$cookie_nama = $_COOKIE['nama'];
print "$cookie_nama";
?> [<a href="../Danung/logout.php" class="style2">Logout</a>] </p>
<p>Klik <a
href="../Danung/daftar.php?register=masukkan nama,email,dan password untuk daftar"
class="style2">disini</a> untuk register </p>
<form name="form1" method="post" action="../Danung/login.php?login=success">
<table width="400" border="0">
<tr bgcolor="#999999">
<td colspan="2"><span class="style1">Login</span></td>
</tr>
<tr bgcolor="#CCCCCC">
<td>User : </td>
<td><input name="user" type="text" id="user"></td>
</tr>
<tr bgcolor="#CCCCCC">
<td>Password : </td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td colspan="2"> </td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" value="Login !"
style="background -color:#CCCCCC "></td>
</tr>
</table>
</form>
<p> </p>
<?php mysql_close($connect); ?>