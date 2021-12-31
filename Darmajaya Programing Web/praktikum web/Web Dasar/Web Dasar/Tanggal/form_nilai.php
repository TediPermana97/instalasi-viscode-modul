<html>
<head>

<title>formnilai</title>
</head>

<body>
<table border="1">
<tr bgcolor="green"><td>pelajaran<td>KKM
<tr><td>B.inggris<td>7,7
<tr><td>IPA<td>8,0
<tr><td>IPS<td>7,5
<tr><td>Matematika
<td>7,3
</table><br>

<table border="1">
<tr bgcolor="yellow"><td>pelajaran<td>Nilai<td>hasil
<tr><td>B.inggris<td>8,2<td>
<?php
$bing =8.2;
$bingd = (double)$bing;
if ($bingd <= 7.7)
{
echo "tidak lulus"; $bingh = "tidak lulus";
}
else
{
echo "Lulus"; $bingh = "lulus";
}
?>
</td>

<tr><td>IPS<td>7.1<td>
<?php
$IPS =7.1;
$IPSd = (double)$IPS;
if ($IPSd <= 7.5)
{
echo "tidak lulus"; $ipsh = "tidak lulus";
}
else
{
echo "Lulus"; $ipsh = "lulus";
}
?>
</td>

<tr><td>Matematika<td>9.0<td>
<?php
$matematika =9.0;
$matematikad = (double)$matematika;
if ($matematikad <= 7.2)
{
echo "tidak lulus"; $matematikah = "tidak lulus";
}
else
{
echo "Lulus"; $matematikah = "lulus";
}
?>
</td>



<tr><td>IPA<td>6.1<td>
<?php
$ipa =6.1;
$ipad = (double)$ipa;
if ($ipad <= 8.0)
{
echo "tidak lulus"; $ipah = "tidak lulus";
}
else
{
echo "Lulus"; $ipah = "lulus";
}
?>
</td>

</table>


<p><b>
<?php
if($bingh=="lulus" &&$ipah=="lulus"&&$ipsh=="lulus"&&$matematikah=="lulus")
{
echo "selamat atas kelulusan anda";
}
else
{
echo "maaf anda tidak lulus";
}
?>
</p>
</body>
</html> 