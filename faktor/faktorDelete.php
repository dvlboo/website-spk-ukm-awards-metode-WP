<?php

include '../tools/connection.php';

$altKode = $_GET['id'];

$query = $conn->query("DELETE FROM ta_faktor WHERE alternatif_kode='$altKode'");

if ($query == True) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        window.location='faktorView.php'
       </script>";
} else {
    die('Gagal! : ' . mysqli_errno($conn));
}
