<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "2022_xiirpl1_samuel_30";

$konek = mysqli_connect($server,$username,$password,$database);

if (!$konek) {
    die ("KONEKSI GAGAL...  <br>" .mysqli_connect_error()."<br>".mysqli_connect_errno());
}else {
    // echo "Koneksi Berhasil";
}

?>