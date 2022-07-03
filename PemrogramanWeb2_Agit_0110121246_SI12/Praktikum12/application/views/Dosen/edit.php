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
                        <li class="breadcrumb-item active">Form Edit Dosen</li>
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
                            <h3 class="card-title">Form Edit Data Dosen</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php echo form_open("Dosen/save"); ?>
                            <div class="form-group row">
                                <label for="nidn" class="col-4 col-form-label">NIDN</label>
                                <div class="col-8">
                                    <input id="nidn" name="nidn" placeholder="Masukan NIDN" type="text" value = "<?php echo $obj_dosen->nidn?>"class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div>
                                        <input id="nama" name="nama" placeholder="Masukan Nama Dosen" type="text" value = "<?php echo $obj_dosen->nama?>"class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-4">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <input id="gender" name="gender" placeholder="Masukan Jenis Kelamin" type="text" value = "<?php echo $obj_dosen->gender?>"class="form-control" required="required">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                                <div class="col-8">
                                    <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tempat Lahir" type="text"value = "<?php echo $obj_dosen->tmp_lahir?>" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-8">
                                    <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" type="" value = "<?php echo $obj_dosen->tgl_lahir?>"class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pendidikan" class="col-4 col-form-label">Pendidikan</label>
                                <div class="col-8">
                                    <input id="pendidikan" name="pendidikan" placeholder="Masukan Pendidikan" type="text"value = "<?php echo $obj_dosen->pendidikan?>" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>


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