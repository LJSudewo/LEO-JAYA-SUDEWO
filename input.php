<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-left mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php" >Pilihan Beasiswa</a></li>
                        <li class="nav-item"><a class="nav-link" href="daftar.php">Daftar Lagi</a></li>
                        <li class="nav-item"><a class="nav-link" href="database.php">Hasil</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Hasil Pendaftaran Beasiswa <!-- Header -->
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <?php
                                // Koneksi ke database
                                include('connect.php');

                                // Data dari form
                                $nama           = $_POST['nama'];
                                $email          = $_POST['email'];
                                $telp           = $_POST['telp'];
                                $smtr           = $_POST['smtr'];
                                $ipk            = $_POST['ipk'];
                                $pilihan        = $_POST['pilihan'];
                                $berkas         = $_POST['berkas'];
                                $status         = "Belum diverifikasi";
                                // Query insert ke database
                                $query          = "INSERT INTO beasiswa (id, nama, email, telp, smtr, ipk, pilihan, berkas, status_ajuan) VALUES ('','$nama', '$email', '$telp', '$smtr', '$ipk', '$pilihan', '$berkas', '$status')";
                                
                                // Pengecekan apakah data berhasil masuk atau tidak
                                if($con->query($query)){
                                //  header("location:hasil.php");
                                }
                                //else{
                                //  echo "Data Gagal Disimpan!";
                                //}
                                echo "<tr>";
                                    echo "<td>Nama</td>";
                                    echo" <td>:</td>";
                                    echo"<td>".$nama."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td>Email</td>";
                                    echo" <td>:</td>";
                                    echo"<td>".$email."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td>Nomor Handphone</td>";
                                    echo" <td>:</td>";
                                    echo"<td>".$telp."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td>Semester</td>";
                                    echo" <td>:</td>";
                                    echo"<td>".$smtr."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td>IPK Terakhir</td>";
                                    echo" <td>:</td>";
                                    echo"<td>".$ipk."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td>Pilihan Beasiswa</td>";
                                    echo" <td>:</td>";
                                    echo"<td>".$pilihan."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td>Berkas</td>";
                                    echo" <td>:</td>";
                                    echo"<td>".$berkas."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td>Status</td>";
                                    echo" <td>:</td>";
                                    echo"<td>".$status."</td>";
                                echo "</tr>";
                            ?>
                        </table>
                    </div>
                </div>
            </div>
</body>

</html>