<?php
$jumlah = 0;
for ($i = 1; $i <= 10; $i++) {
echo "$i + ";
$jumlah += $i;
}
echo "<br/>totalnya : $jumlah";
?>