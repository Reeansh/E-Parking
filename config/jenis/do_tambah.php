<?php

include "../config.php";
$jenisK = $_POST['jenis_kendaraan'];

$query = mysqli_query($koneksi,"INSERT INTO jenisKendaraan VALUES('','$jenisK')");

if($query){
    header("location:../../admin/jenis_kendaraan.php");

}else{
    header("location:../../admin/jenis_kendaraan.php");
}
?>