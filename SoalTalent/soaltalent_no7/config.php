<?php
//Membuat koneksi ke database
$koneksi = mysql_connect("localhost", "root", "") or die ("Tidak bisa terhubung ke Database!");
$db = mysql_select_db("soaltalent", $koneksi);

if ($db) {
    echo "Koneksi ke database berhasil";
}else{
 echo "Database tidak bisa konek";
}
?>