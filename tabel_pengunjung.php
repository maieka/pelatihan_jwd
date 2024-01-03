<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Tabel Data Pemesanan</title>

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
    <center>
<center><h1>Data Pemesanan Wisata</h1></center>
            <div class="card-body">
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama Pengunjung</th>
                            <th>Identitas</th>
                            <th>No.Hp</th>
                            <th>Tempat Wisata</th>
                            <th>Tanggal</th>
                            <th>Pengunjung Dewasa</th>
                            <th>Pengunjung Anak</th>
                            <th>Pengunjung Lansia</th>
                            <th>Total Harga</th>
                            <th>Total Bayar</th>
                        </tr>
    </center>
        <?php
        include 'koneksi.php';

        $data = mysqli_query($kon,"SELECT * from wisata");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
                <td><?php echo $d['no_pemesanan']; ?></td>
                <td><?php echo $d['nama_pemesanan']; ?></td>
				        <td><?php echo $d['identitas_pemesanan']; ?></td>
				        <td><?php echo $d['no_hp pemesanan']; ?></td>
                <td><?php echo $d['pemesanan_tempat_wisata']; ?></td>
                <td><?php echo $d['tgl_pemesanan']; ?></td>
                <td><?php echo $d['pemesanan_pengunjung_dewasa']; ?></td>
                <td><?php echo $d['pemesanan_pengunjung_anak']; ?></td>
                <td><?php echo $d['pemesanan_pengunjung_lansia']; ?></td>
                <td><?php echo $d['harga_pemesanan']; ?></td>
                <td><?php echo $d['total_pemesanan']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
     <!-- Copyright -->
 <div class="text-center p-3" style="background-color: #0dcaf0">
   By Maieka Sari istiqomah
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>