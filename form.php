<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket</title>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                        <form action="totalbayar.php" method="post">
                        <div class="row justify-content-center">
                            <h3>Form Pemesanan</h3>
                          
                            <br>
                            <div class="row g-3 mb-4">
                                <div class="col-md-4">
                                    <label for="nama">Nama Lengkap</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="identitas">Nomor Identitas</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="identitas" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="nohp">No Hp</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="nohp"  class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="tempat">Tempat Wisata</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="tempat" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="SariAter">SariAter</option>
                                        <option value="Kebun Raya Bogor">Kebun Raya Bogor</option>
                                        <option value="Kota Tua">Kota Tua</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="tgl">Tanggal Kunjungan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="tgl" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="dewasa">Pengunjung Dewasa</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="dewasa" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="anak">Pengunjung Anak-Anak</label><br>
                                    <small>usia dibawah 12 tahun</small>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="anak" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                    <label for="dewasa">Pengunjung Lansia</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="lansia" class="form-control" required>
                                </div>

                            <div class="row g-2 justify-content-center">
                                <div class="col-md-4">
                                    <input type="submit" name="hitung" class="btn btn-primary" value="Hitung Total Harga">
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" name="submit" class="btn btn-warning" value="Pesan Tiket">
                                </div>
                                <div class="col-md-4">
                                    <a href="tabel_pengunjung.php" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
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