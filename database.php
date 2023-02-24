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
                        <li class="nav-item"><a class="nav-link" href="daftar.php">Daftar Sekarang</a></li>
                        <li class="nav-item"><a class="nav-link disabled" href="database.php">Hasil</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Pendaftar Beasiswa
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nomor Handphone</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">IPK</th>
                                    <th scope="col">Pilihan Beasiswa</th>
                                    <th scope="col">Berkas</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php 
                      include('connect.php');
                      $no = 1;
                      $query = mysqli_query($con,"SELECT * FROM beasiswa");
                      while($row = mysqli_fetch_array($query)){
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $no++ ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nama'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['telp'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['smtr'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ipk'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['pilihan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['berkas'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['status_ajuan'] ?>
                                    </td>
                                    <?php
                                    if($row['status_ajuan'] == "Berhasil di Verifikasi") {
                                        echo "<td>" . "<a href='verifikasi.php?id=$row[id]' class='btn btn-warning btn-sm'>Batalkan Verifikasi</a>"  . "</td>";
                                    } else {
                                        echo "<td>" . "<a href='verifikasi.php?id=$row[id]' class='btn btn-primary btn-sm'>Klik Untuk Verifikasi</a>"  . "</td>";
                                        }?>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <?php
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>