<html>
<body>
<h1> PENJUMLAHAN </h1>
<form method="post">
Nilai 1 = <input type="text" name="a"><br>
Nilai 2 = <input type="text" name="b">
<?php
$a=$_POST["a"];
$b=$_POST["b"];
$penjumlahan = $a+$b;
echo "Hasil = $penjumlahan";
?>
<br><input type="submit" value="hasil">
</form>
</body>
</html>