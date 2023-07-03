<?php

include "../config.php";
$id = $_POST['id'];
$jenisK = $_POST['jenis_kendaraan'];

$query = mysqli_query($koneksi,"UPDATE jenisKendaraan SET jenis_kendaraan='$jenisK' WHERE id_jenisKendaraan='$id'");

if($query){
    header("location:../../admin/jenis_kendaraan.php");

}else{
    header("location:../../admin/jenis_kendaraan.php");
}
?>