<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>

<body>
    <div class=" m-4 p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <h5 class="card-header">
                                Belanja Online
                            </h5>
                            <div class="card-body">
                                <form method="POST" action="form_belanja.php">
                                    <div class="form-group row">
                                        <label for="cs" class="col-4 col-form-label">Customer</label>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-address-card"></i>
                                                    </div>
                                                </div>
                                                <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Pilihan Produk</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="televisi" required="required">
                                                <label for="produk_0" class="custom-control-label">TELEVISI</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required">
                                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci" required="required">
                                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah Produk" type="number" class="form-control" required="required">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fa "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="kirim" type="submit" class="btn btn-success">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h5 name="harga" class="bg-primary card-header">
                                Daftar Harga
                            </h5>
                            <div class="card-body">
                                <tr>
                                    <td>Televisi</td>
                                    <td>:</td>
                                    <td name="harga">4.200.000</td>
                                </tr>
                                <hr>
                                <tr>
                                    <td>Kulkas</td>
                                    <td>:</td>
                                    <td name="harga ">3.100.000</td>
                                </tr>
                                <hr>
                                <tr>
                                    <td>Mesin Cuci</td>
                                    <td>:</td>
                                    <td name="harga">3.800.000</td>
                                </tr>
                            </div>
                            <div class="card-footer bg-primary">
                                Harga Dapat Barubah Setiap Saat
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-4 p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="card-body">
                                <?php

                                if (isset($_POST['kirim'])) {
                                    $nama = $_POST['nama'];
                                    $produk = $_POST['produk'];
                                    $jumlah = $_POST['jumlah'];


                                    if ($produk == 'kulkas') {
                                        $harga = 3100000;
                                    } elseif ($produk == 'televisi') {
                                        $harga = 4200000;
                                    } elseif ($produk == 'mesin_cuci') {
                                        $harga = 3800000;
                                    }


                                    $harga_total = $jumlah * $harga;

                                    switch ($produk) {
                                        case "televisi":
                                            $produk = "TELEVISI";
                                            break;
                                        case "kulkas":
                                            $produk = "KULKAS";
                                            break;
                                        case "mesin_cuci":
                                            $produk = "MESIN CUCI";
                                            break;
                                        default:
                                            "";
                                    }
                                }

                                ?>

                                <?php
                                if (isset($_POST['kirim'])) { ?>
                                    <p>Nama Customer : <?= $nama ?> </p>
                                    <p>Produk Pilihan : <?= $produk ?></p>
                                    <p>Jumlah Beli : <?= $jumlah ?></p>
                                    <p>Total Beli : <?= $harga_total ?></p>

                                <?php } else {
                                    echo '<div class="alert alert-warning" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Data Belanja! </div>';
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                    </div>
                </div>
            </div>
        </div>
    </div>





</body>

</html>