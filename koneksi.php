<?php
$host="localhost";
$user="root";
$password="";
$database="koneksi";

$koneksi=mysqli_connect($host,$user,$password,$database);

//cek koneksi
if($koneksi){
echo "Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>