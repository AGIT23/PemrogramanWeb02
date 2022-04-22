<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai Ujian</title>
</head>

<body class="bg-light">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-12 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="#">WEB02</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Review PHP <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">OOP</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown">2022</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="text" placeholder="search" />
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">submit</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <br />
        <br />
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <h6 class="card-header bg-white">
                            Form Nilai Ujian
                        </h6>
                        <div class="card-body">
                            <form method="POST" autocomplete="off" action="form_NilaiUjian.php">
                                <div class="form-group row">
                                    <label for="nim" class="col-4 col-form-label">NIM</label>
                                    <div class="col-8">
                                        <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="matkul" class="col-4 col-form-label">Mata kuliah</label>
                                    <div class="col-8">
                                        <select id="matkul" name="matkul" class="custom-select" required="required">
                                            <option value="">Pilih Matakuliah</option>
                                            <option value="Pemrograman Web">Pemrograman Web</option>
                                            <option value="Basis Data">Basis Data</option>
                                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nilai" class="col-4 col-form-label">Nilai</label>
                                    <div class="col-8">
                                        <input id="nilai" name="nilai" placeholder="Masukan Nilia Mahasiswa" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h6 class="card-header  bg-white">
                            Hasil Nilai Ujian
                        </h6>
                        <div class="card-body">
                            <?php
                            require_once('class_NilaiMahasiswa.php');
                            if (isset($_POST['submit'])) {
                                $nm = new NilaiMahasiswa($_POST['matkul'], $_POST['nilai'], $_POST['nim']);
                                $Nilai = $_POST['nilai'];
                                $ketLulus = $nm->hasil($Nilai);
                                $ketGrade = $nm->grade($Nilai);
                            }
                            ?>
                            <?php if (isset($_POST['submit'])) { ?>
                                <p>NIM : <?= $nm->nim ?> </p>
                                <p>Mata Kuliah : <?= $nm->matkul ?></p>
                                <p>Nilai : <?= $Nilai ?></p>
                                <p>Status : <?= $ketLulus ?></p>
                                <p>Grade : <?= $ketGrade ?></p>

                            <?php } else {
                                echo '<div class="alert alert-warning" role="alert"> Silahkan Isi Form Disamping Untuk Menampilkan Hasil Ujian </div>';
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <br><br><br>
        <div class="container-fluid ">
            <footer class="py-4 bg-white mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div>
                            <p>
                                <b>Lab Pemrograman Web Lanjutan</b> <br>
                                Dosen Sirojul Munir S.Si,M.Kom <br>
                                Sekolah Tinggi Terpadu Nurul Fikri <br>

                            </p>
                        </div>
                        <div>
                            <a href="#">Pemrograman Web</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a> <br>
                            &copy; Your Website 2022
                        </div>
                    </div>
                </div>
            </footer>
        </div>


</body>

</html>