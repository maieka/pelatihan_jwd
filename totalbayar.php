<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container">
    <a class="navbar-brand" href="#">Wisata Kuy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto 3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item" id="navbarNav">
          <a class="nav-link active" href="tabel_pengunjung.php">Tabel Data Pengunjung</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php

                        if (isset($_POST['hitung'])) {
                            $nama = $_POST['nama'];
                            $identitas = $_POST['identitas'];
                            $nohp = $_POST['nohp'];
                            $tempat = $_POST['tempat'];
                            $tgl = $_POST['tgl'];
                            $dewasa = $_POST['dewasa'];
                            $anak = $_POST['anak'];
                            $lansia = $_POST['lansia'];

                            if ($tempat == "SariAter") {
                                $harga = 25000;
                                $total_dewasa = 25000 * $dewasa;
                                $total_anak = 10000 * $anak;
                                $total_lansia = 30000 * $lansia;
                            } elseif ($tempat == "Kebun Raya Bogor") {
                                $harga = 100000;
                                $total_dewasa = 100000 * $dewasa;
                                $total_anak = 50000 * $anak;
                                $total_lansia = 30000 * $lansia;
                            } elseif ($tempat == "Kota Tua") {
                                $harga = 30000;
                                $total_dewasa = 30000 * $dewasa;
                                $total_anak = 15000 * $anak;
                                $total_lansia = 30000 * $lansia;
                            }

                            $total_harga = $total_dewasa + $total_anak + $total_lansia;
                        ?>
                            <form action="simpanpengunjung.php" method="post">
                                <h3>Form Pemesanan</h3>
                                <br>
                                <div class="row g-3 mb-4">
                                    <div class="col-md-4">
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="nama" readonly class="form-control" value="<?php echo $nama; ?>" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="identitas">Nomor Identitas</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="identitas" readonly class="form-control" value="<?php echo $identitas; ?>" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="nohp">No Hp</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="nohp" readonly class="form-control" value="<?php echo $nohp; ?>" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="tempat">Tempat Wisata</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" name="tempat" readonly class="form-control" value="<?php echo $tempat; ?>" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="tgl">Tanggal Kunjungan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="tgl" readonly class="form-control" value="<?php echo $tgl; ?>" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="dewasa">Pengunjung Dewasa</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="dewasa" readonly class="form-control" value="<?php echo $dewasa; ?>" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="anak">Pengunjung Anak-Anak</label><br>
                                        <small>usia dibawah 12 tahun</small>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="anak" readonly class="form-control" value="<?php echo $anak; ?>" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="dewasa">Pengunjung Lansia</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="lansia" readonly class="form-control" value="<?php echo $lansia; ?>" required>
                                    </div>

                                    <div class="col-md-4">
                                        Harga Tiket
                                    </div>
                                    <div class="col-md-8">
                                        Rp <?php echo $harga ?>
                                    </div>

                                    <div class="col-md-4">
                                        Total Harga
                                    </div>
                                    <div class="col-md-8">
                                        Rp <?php echo $total_harga ?>
                                    </div>

                                </div>

                                <div class="row justify-content-center mb-4">
                                    <div class="col-md-11">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="setuju" id="setuju" required>
                                            <label class="form-check-label" for="setuju">
                                                Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-2 justify-content-center">
                                <div class="col-md-4">
                                        <button type="submit" name="hitung" class="btn btn-primary">Total Bayar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" name="pesan" class="btn btn-warning">Pesan Tiket</button>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="form.php" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
       <!-- Copyright -->
 <div class="text-center p-3" style="background-color: #0dcaf0">
   By Maieka Sari istiqomah
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>