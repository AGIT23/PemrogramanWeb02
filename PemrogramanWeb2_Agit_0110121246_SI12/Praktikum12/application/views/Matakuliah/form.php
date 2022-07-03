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
                        <li class="breadcrumb-item active">Form Matakuliah</li>
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
                            <h3 class="card-title">Form Input Data Matakuliah</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php echo form_open("Matakuliah/save"); ?>
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Nama Matakuliah</label>
                                <div class="col-8">
                                    <input id="nama" name="nama" placeholder="Masukan Nama Matakuliah" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sks" class="col-4 col-form-label">Jumlah SKS</label>
                                <div class="col-8">
                                    <input id="sks" name="sks" placeholder="Masukan Jumlah SKS" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kode" class="col-4 col-form-label">Kode Matakuliah</label>
                                <div class="col-8">
                                    <input id="kode" name="kode" placeholder="Masukan Kode Matakuliah" type="text" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Dosen" class="col-4 col-form-label">Dosen</label>
                                <div class="col-8">
                                    <input id="Dosen" name="Dosen" placeholder="Masukan Nama Dosen" type="text" class="form-control" required="required">
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