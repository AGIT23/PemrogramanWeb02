<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Form Penilaian</title>
</head>

<body>
  <div class="m-4 p-4">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h5 class="card-header">
                Sistem Penilaian
              </h5>
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

</body>

</html>