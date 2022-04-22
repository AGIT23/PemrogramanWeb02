<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../vendor/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../vendor/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="../vendor/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Praktikum</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../vendor/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Agit</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Praktikum 1
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../P1/array_siswa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Array Siswa</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Praktikum 2
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../P2/form_belanja.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Form Belanja</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Form Nilai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Praktikum 3
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../P3/Function/form_nilai.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>From Penilaian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../P3/Web/template.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>WEB</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Praktikum 4
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../P4/Daftar Mahasiswa/daftar_mahasiswa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Mahsiswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../P4/Nilai Mahasiswa/form_NilaiUjian.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nilai Mahasiswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../P4/Persegi Panjang/data_PersegiPanjang.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Persegi Panjang</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Praktikum 5
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../P5/AccounBank/atm.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>AccounBank</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../P5/Dispenser/dispenser.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dispenser</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Project 1 | BMI
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../BMI/form.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>BMI</p>
                                    </a>
                                </li>

                            </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->


            <!-- /.sidebar-custom -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Praktikum </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Praktikum 2</a></li>
                                <li class="breadcrumb-item active">Form Nilai</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">
                                                Sistem Penilaian
                                            </h5>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <form method="POST" autocomplete="off" action="form_nilai.php">
                                                <div class="form-group row">
                                                    <label for="text" class="col-4 col-form-label">Nama Lengkap</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-address-book-o"></i>
                                                                </div>
                                                            </div>
                                                            <input id="text" name="nama" placeholder="Masukan Nama Lengkap" type="text" class="form-control" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label>
                                                    <div class="col-8">
                                                        <select id="select" name="matkul" required="required" class="custom-select">
                                                            <option value="">Pilih Matkul</option>
                                                            <option value="basis_data">Basis Data</option>
                                                            <option value="php">PHP</option>
                                                            <option value="ddp">Dasar Dasar Pemrograman</option>
                                                            <option value="bi">Bahasa Indonesia</option>
                                                            <option value="so">Sistem Operasi</option>
                                                            <option value="pw">Pemrograman Web</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="text1" class="col-4 col-form-label">Nilai UTS</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-adjust"></i>
                                                                </div>
                                                            </div>
                                                            <input id="text1" name="nilai_uts" placeholder="Masukan Nilai UTS" type="number" class="form-control" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="text2" class="col-4 col-form-label">Nilai UAS</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-adjust"></i>
                                                                </div>
                                                            </div>
                                                            <input id="text2" name="nilai_uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-adjust"></i>
                                                                </div>
                                                            </div>
                                                            <input id="text3" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-4 col-8">
                                                        <button name="submit" type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <h5 class="card-header">
                                            Hasil Penilaian
                                        </h5>
                                        <div class="card-body">
                                            <!-- Cetak php -->
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $nama = $_POST['nama'];
                                                $matkul = $_POST['matkul'];
                                                $nilai_uts = $_POST['nilai_uts'];
                                                $nilai_uas = $_POST['nilai_uas'];
                                                $nilai_tugas = $_POST['nilai_tugas'];
                                                $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
                                                $nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

                                                if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
                                                    $grade = 'E';
                                                } elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
                                                    $grade =  'D';
                                                } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
                                                    $grade =  'C';
                                                } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
                                                    $grade =  'B';
                                                } elseif ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
                                                    $grade =  'A';
                                                } else {
                                                    $grade = 'I';
                                                }

                                                if ($nilai_akhir > 55) {
                                                    $n = 'LULUS';
                                                } else {
                                                    $n = 'TIDAK LULUS';
                                                }

                                                switch ($matkul) {
                                                    case "basis_data":
                                                        $nama_matkul = "Basis Data";
                                                        break;
                                                    case "php":
                                                        $nama_matkul = "PHP";
                                                        break;
                                                    case "ddp":
                                                        $nama_matkul = "Dasar Dasar Pemerograman";
                                                        break;
                                                    case "bi":
                                                        $nama_matkul = "Bahasa Indonesia";
                                                        break;
                                                    case "so":
                                                        $nama_matkul = "Sistem Operasi";
                                                        break;
                                                    case "pw":
                                                        $nama_matkul = "Pemrograman Web";
                                                        break;
                                                    default:
                                                        "";
                                                }
                                                switch ($grade) {
                                                    case "E":
                                                        $predikat = "SANGAT KURANG";
                                                        break;
                                                    case "D":
                                                        $predikat = "KURANG";
                                                        break;
                                                    case "C":
                                                        $predikat = "CUKUP";
                                                        break;
                                                    case "B":
                                                        $predikat = "MEMUASKAN";
                                                        break;
                                                    case "A":
                                                        $predikat = "SANGAT MEMUASKAN";
                                                        break;
                                                    case "I":
                                                        $predikat = "TIDAK ADA";
                                                        break;
                                                    default:
                                                        "";
                                                }
                                            }
                                            ?>

                                            <?php if (isset($_POST['submit'])) { ?>
                                                <p>Nama Lengkap : <?= $nama ?> </p>
                                                <p>Mata Kuliah : <?= $nama_matkul ?></p>
                                                <p>Nilai UTS : <?= $nilai_uts ?></p>
                                                <p>Nilai UAS : <?= $nilai_uas ?></p>
                                                <p>Nilai Tugas/Praktikum : <?= $nilai_tugas ?></p>
                                                <p>Nilai Akhir : <?= $nilai_akhir ?></p>
                                                <p>Grade Nilai : <?= $grade ?></p>
                                                <p>Mahasiswa Dinyatakan <?= $n ?> dengan predikat <?= $predikat ?></p>
                                            <?php } else {
                                                echo '<div class="alert alert-warning" role="alert"> Silahkan Isi Form Disamping Untuk Menampilkan Nilai , Grade dan Predikat </div>';
                                            } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>Copyright &copy; 2022 <a href="#">Agit | Sistem Informasi 12</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../vendor/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../vendor/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../vendor/dist/js/demo.js"></script>
</body>

</html>