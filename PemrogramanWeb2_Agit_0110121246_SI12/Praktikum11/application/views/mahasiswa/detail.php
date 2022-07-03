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
                        <li class="breadcrumb-item"><a href="#">Praktikum 9</a></li>
                        <li class="breadcrumb-item active">Detail Mahasiswa</li>
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
                            <h3 class="card-title">Detail Mahasiswa</h3>

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
                                        <th>ID</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>IPK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $siswa->id ?></td>
                                        <td><?php echo $siswa->nim ?></td>
                                        <td><?php echo $siswa->nama ?></td>
                                        <td><?php echo $siswa->gender ?></td>
                                        <td><?php echo $siswa->tmp_lahir ?></td>
                                        <td><?php echo $siswa->tgl_lahir ?></td>
                                        <td><?php echo $siswa->ipk ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <img src="<?= base_url() ?>uploads/photos/<?= $siswa->id ?>.jpg" alt="" width="300" />
                            <div class="mt-4">
                                <h4><?= $siswa->nama ?></h4>
                                <p>Foto Mahasiswa</p>
                                <?php echo $error; ?>
                                <?php echo form_open_multipart('mahasiswa/upload') ?>
                                <input type="file" name="foto" size="300" />
                                <input type="hidden" name="idmahasiswa" value="<?= $siswa->id ?>" />
                                <br>
                                <br>
                                <input type="submit" value="upload foto" class="btn btn-primary" />
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
d


</body>

</html>