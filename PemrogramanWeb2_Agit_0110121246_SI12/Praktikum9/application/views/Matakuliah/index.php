
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
                        <li class="breadcrumb-item active">Matakuliah</li>
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
                            <h3 class="card-title">Daftar Matakuliah</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr class="text-center">
                                        <th>NO</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>SKS</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($matkul as $mk) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $nomor ?></td>
                                            <td class="text-center"><?= $mk->kode ?></td>
                                            <td class="text-center"><?= $mk->nama ?></td>
                                            <td class="text-center"><?= $mk->sks ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="<?php echo base_url("index.php/Matakuliah/detail/$mk->id") ?>">Detail</a>
                                                &nbsp;
                                                <a class="btn btn-success" href="<?php echo base_url("index.php/Matakuliah/edit/$mk->id") ?>">Edit</a>
                                                &nbsp;
                                                <a class="btn btn-danger" href="<?php echo base_url("index.php/Matakuliah/delete/$mk->id") ?>" onclick="return hapusMatkul('Anda yakin ingin menghapus data Matakuliah <?php echo $mk->nama?>')">Delete</a>
                                            </td>

                                        </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <br />
                            <a class="btn btn-primary" href="<?php echo base_url("index.php/Matakuliah/form") ?>">Tambah</a>

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