<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Praktikum 9</a></li>
                        <li class="breadcrumb-item active">Dosen</li>
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
                            <h3 class="card-title">Daftar Dosen</h3>

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
                                        <th>NIDN</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Pendidikan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($dosen as $ddsn) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $nomor ?></td>
                                            <td class="text-center"><?= $ddsn->nidn?></td>
                                            <td class="text-center"><?= $ddsn->nama?></td>
                                            <td class="text-center"><?= $ddsn->gender ?></td>
                                            <td class="text-center"><?= $ddsn->tmp_lahir ?></td>
                                            <td class="text-center"><?= $ddsn->tgl_lahir?></td>
                                            <td class="text-center"><?= $ddsn->pendidikan ?></td>
                                        </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            
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