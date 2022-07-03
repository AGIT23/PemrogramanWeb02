<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="" AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Praktikum</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
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
                    <a href="<?php echo base_url("index.php/home/index") ?>" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Praktikum 9
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url("index.php/Dosen/index") ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("index.php/mahasiswa") ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("index.php/Matakuliah") ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Matakuliah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--<li class="nav-item"> 
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Praktikum 2
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../P2/form_belanja.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Belanja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../P2/form_nilai.php" class="nav-link">
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

                    </ul> -->

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->


    <!-- /.sidebar-custom -->
</aside>