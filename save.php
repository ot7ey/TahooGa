<?php
include "koneksi.php";

$nama = $_POST['nama'];
$skor = $_POST['skor'];

$query = "INSERT INTO skor_quiz (nama, skor) VALUES ('$nama', '$skor')";

if (mysqli_query($conn, $query)) {
    echo "Berhasil";
} else {
    echo "Gagal";
}
?>