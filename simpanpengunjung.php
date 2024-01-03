<?php

include "koneksi.php";

if(isset($_POST['pesan'])) {
    $nama = $_POST['nama'];
    $identitas = $_POST['identitas'];
    $nohp = $_POST['nohp'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $dewasa = $_POST['dewasa'];
    $anak = $_POST['anak'];
    $lansia = $_POST['lansia'];

    if ($tempat == "SariAter") {
        $harga = 25000;
        $total_dewasa = 20000 * $dewasa;
        $total_anak = 10000 * $anak;
        $total_lansia = 30000 * $lansia;
    } elseif ($tempat == "Kebun Raya Bogor") {
        $harga = 16000;
        $total_dewasa = 16000 * $dewasa;
        $total_anak = 10000 * $anak;
        $total_lansia = 30000 * $lansia;
    }elseif ($tempat == "Kota Tua") {
        $harga = 30000;
        $total_dewasa = 30000 * $dewasa;
        $total_anak = 30000 * $anak;
        $total_lansia = 30000 * $lansia;
    }

    $total_harga = $total_dewasa + $total_anak;

mysqli_query($kon, "INSERT INTO wisata VALUES('','$nama','$identitas','$nohp','$tempat','$tgl','$dewasa','$anak','$lansia','$harga','$total_harga')");

    header("location:tabel_pengunjung.php");
    
}

?>