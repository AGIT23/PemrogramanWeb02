<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Datar Mahasiwa</title>
</head>

<body class="bg-light">
    <?php
    require_once('class_Mahasiswa.php');

    $mahasiswa1 = new Mahasiswa('02011', "Faiz Fikri", "TI", 2012, 3.8);
    $mahasiswa2 = new Mahasiswa('02012', "Allisa Khairunnisa", "TI", 2012, 3.9);
    $mahasiswa3 = new Mahasiswa('01011', "Rosaile Naurah", "SI", 2010, 3.46);
    $mahasiswa4 = new Mahasiswa('01012', "Defghi Muhammad", "SI", 2010, 3.2);

    $ar_mahasiswa = [$mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4];

    ?>
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
        <div class="row m-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <div class="card">
                    <ul class="navbar-nav ml-md-auto">
                        <li>
                            <form class="form-inline p-3">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                <input class="form-control mr-sm-2 m-1" type="text" placeholder="search" />
                            </form>
                        </li>
                    </ul>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                    <th>Tahun Angkatan</th>
                                    <th>IPK</th>
                                    <th>Predikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                foreach ($ar_mahasiswa as $mhs) {

                                    echo '<tr><td>' . $nomor . '</td>';
                                    echo '<td>' .$mhs->nim . '</td>';
                                    echo '<td>' . $mhs->nama . '</td>';
                                    echo '<td>' . $mhs->prodi . '</td>';
                                    echo '<td>' . $mhs->thn_angkatan . '</td>';
                                    echo '<td>' . $mhs->ipk . '</td>';
                                    echo '<td>' . $mhs->predikat_ipk() . '</td>';
                                    echo '<tr/>';
                                    $nomor++;
                                }

                                ?>
                            </tbody>
                            </table>

                    </div>
                    <div class="card-footer-light">
                        <nav class="p-2">
                            <ul class="pagination ">
                                <li class="page-item ">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
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