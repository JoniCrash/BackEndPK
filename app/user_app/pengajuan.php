<?php
include('../../conf/config.php');
$nm_lengkap = $_POST['nama_lengkap'];
$alamat_ktp = $_POST['alamat_ktp'];
$alamat_pemasangan = $_POST['alamat_pemasangan'];
$titik_koordinat = $_POST['titik_koordinat'];
$email = $_POST['email'];
$no_hp1 = $_POST['no_hp1'];
$no_hp1 = $_POST['no_hp2'];
$paket = $_POST['paket'];
$foto_ktp = $_POST['foto_ktp'];
$foto_depan_rumah = $_POST['foto_depan_rumah'];

$sql = mysqli_query( $koneksi,"INSERT INTO pelanggan (id,nama_lengkap, alamat_ktp, alamat_pemasangan, titik_koordinat, email, no_hp1, no_hp2, paket, foto_ktp, foto_depan_rumah) VALUES ('', '$nm_lengkap', '$alamat_ktp', '$alamat_pemasangan', '$titik_koordinat', '$email', '$no_hp1', '$no_hp2','$paket', '$foto_ktp', '$foto_depan_rumah')")
?>