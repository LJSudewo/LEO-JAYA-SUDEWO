<?php


include('connect.php');

session_start();

$id = $_GET['id'];

$selectQuery = "SELECT * FROM beasiswa WHERE id='$id'";
$getUser = mysqli_query($con, $selectQuery);
$rowUser = mysqli_fetch_assoc($getUser);
if($rowUser['status_ajuan'] == 'Berhasil di Verifikasi') {
    $query = "UPDATE beasiswa SET status_ajuan='Belum di Verifikasi' WHERE id='$id'";
} else {
    $query = "UPDATE beasiswa SET status_ajuan='Berhasil di Verifikasi' WHERE id='$id'";
}

$sql = mysqli_query($con, $query);

if($sql) {
    $_SESSION['result'] = 'Berhasil Mengubah Status';
    header('location:database.php');
}

?>