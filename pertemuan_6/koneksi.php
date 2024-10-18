<?php
$server = "localhost";
$user = "root";
$pass = "";
$namaDB = "db_karyawan";
$port = 3306;
/*
//buat koneksi
$koneksi = mysqli_connect($server, $user, $pass, $namaDB, $port); //hasilnya koneksi = true atau false

if (!$koneksi){ //tidak false berarti true
    die ("Koneksi gagal: ". mysql_connect_error());
}*/
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    //buat koneksi
    $koneksi = mysqli_connect($server, $user, $pass, $namaDB, $port); //hasilnya koneksi = true atau false
} catch (mysqli_sql_exception $erornih){
    //kalo ada kesalahan koneksi
    echo "Koneksi gagal: ".$erornih->getMessage();
}
?>