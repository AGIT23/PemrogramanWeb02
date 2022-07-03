
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php
                        $username =  $this->session->userdata('username');
                        if ($username){
                            echo "<h2>Selamat Datang $username</h2>";
                        }
                    ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Praktikum 9</a></li>
                        <li class="breadcrumb-item active">Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Mahasiswa</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>GENDER</th>
                                        <th>Predikat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($mahasiswa as $mhs) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $mhs->nim ?></td>
                                            <td><?= $mhs->nama ?></td>
                                            <td><?= $mhs->gender ?></td>
                                            <td><?= $mhs->ipk ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id") ?>">Detail</a>
                                                &nbsp;
                                                <a class="btn btn-success" href="<?php echo base_url("index.php/mahasiswa/edit/$mhs->id") ?>">Edit</a>
                                                &nbsp;
                                                <a class="btn btn-danger" href="<?php echo base_url("index.php/mahasiswa/delete/$mhs->id") ?>" onclick="return hapusMahasiwa('Anda yakin ingin menghapus data mahasiswa yang bernama <?php echo $mhs->nama?>')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <br />
                            <a class="btn btn-primary" href="<?php echo base_url("index.php/mahasiswa/form") ?>">Tambah</a>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>



</body>

</html>