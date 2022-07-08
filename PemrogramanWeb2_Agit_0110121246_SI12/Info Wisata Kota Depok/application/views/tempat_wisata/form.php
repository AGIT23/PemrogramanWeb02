<div class="row">
    <div class="col-md-12">
        <?= $this->session->flashdata("mess") ?>
    </div>
    <div class="col-md-7">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form <?= $detail ? 'Ubah' : 'Tambah' ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Jenis Wisata</label>
                        <select name="jenis_wisata" id="jenis_wisata" class="form-control">
                            <?php foreach ($jenis_wisata as $key => $value) :
                            $selected = $detail ? ($value->id === $detail->jenis_id ? 'selected' : '') : '';
                            ?>
                            <option value="<?=$value->id?>" <?=$selected?>><?=$value->nama?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control">
                            <?php foreach ($kecamatan as $key => $value) :
                            $selected = $detail ? ($value->id === $detail->kecamatan_id ? 'selected' : '') : '';
                            ?>
                            <option value="<?=$value->id?>" <?=$selected?>><?=$value->nama?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?=$detail ? $detail->nama : ''?>" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"><?=$detail ? $detail->alamat : ''?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="latlong">Latlong</label>
                        <input type="text" class="form-control" name="latlong" id="latlong" value="<?=$detail ? $detail->latlong : ''?>" placeholder="Masukkan latlong">
                    </div>
                    <div class="form-group">
                        <label for="skor_rating">Skor Rating</label>
                        <input type="number" class="form-control w-15" name="skor_rating" id="skor_rating" value="<?=$detail ? $detail->skor_rating : ''?>" placeholder="Masukkan Skor Rating" min="1" max="5">
                    </div>
                    <div class="form-group">
                        <label for="harga_tiket">Harga Tiket</label>
                        <input type="number" class="form-control w-50" name="harga_tiket" id="harga_tiket" value="<?=$detail ? $detail->harga_tiket : ''?>" placeholder="Masukkan Harga Tiket">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" name="website" id="website" value="<?=$detail ? $detail->website : ''?>" placeholder="Masukkan website">
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas</label>
                        <textarea name="fasilitas" id="fasilitas" class="form-control"><?=$detail ? $detail->fasilitas : ''?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto1">Foto 1</label>
                        <input type="file" class="d-block" name="foto1" id="foto1" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="foto2">Foto 2</label>
                        <input type="file" class="d-block" name="foto2" id="foto2" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="foto3">Foto 3</label>
                        <input type="file" class="d-block" name="foto3" id="foto3" accept="image/*">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                    <a href="<?= base_url('admin/jenis-wisata') ?>" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i></a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>