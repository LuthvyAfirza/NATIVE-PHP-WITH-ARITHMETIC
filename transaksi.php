<?php
    @ $paket = $_POST['data1'];
    @ $detail = $_POST['data2'];
    @ $harga = $_POST['data3']; 

    @$result = $_POST['harga'] * $_POST['tambah'];

    @$kembalian = $_POST['pembayaran'] - $_POST['result'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="transaksi.css">
    <title>Transaksi</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="landing.php">Home</a>
            <a class="navbar-brand" href="transaksi.php">Transaksi</a>
            <a class="navbar-brand" href="login.html? alert=logout">Logout</a>
        </div>
</nav>

<br><br>
<form class="box" height="500px" method="POST" action="">
  <div class="mb-3">
    <br>No Transaksi
    <input type="text" class="form-control" placeholder="Nomor Transaksi">
  </div>
  <div class="mb-3">
   Tanggal Transaksi
    <input type="date" class="form-control" placeholder="Tanggal Transaksi">
  </div>
  <div class="mb-3">
    Nama Customer
    <input type="text" class="form-control" placeholder="Nama Customer">
  </div>
  <div class="mb-3">
   Pilihan Paket
    <input type="text" class="form-control" value="<?php echo ($paket)?>">
  </div>
  <div class="mb-3">
    Harga Paket
    <input type="text" name="harga" class="form-control" value="<?php echo ($harga)?>">
  </div>
  <div class="mb-3">
    Jumlah Produk
    <input type="number" class="form-control" name="tambah">
  </div>

  <button type="submit" class="btn btn-primary" style="margin-bottom: 15px; margin-left: 86%;">Hitung Total Harga</button>
</form>
<br><br>
    </div>
    <div class="result mb-3">
        <div class="row">
            <form action="" method="POST">
                <div class="col-6">
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label class="form-label px-4" for="result">Total Harga&nbsp;</label>
                        <input type="text" name="result" id="result" class="form-control mx-4"
                            value="<?php echo $result ?>">
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label class="form-label px-4" for="pembayaran">Pembayaran</label>
                        <input type="text" name="pembayaran" id="pembayaran" class="form-control mx-4"
                            placeholder="Input Jumlah Uang">
                    </div>
                </div>
                <br>
                <button type="submit" style="margin-left: 40px;" class="btn btn-primary">
                    Hitung Kembalian
                </button>
                <br><br>
            </form>
          
            <div class="col">
                <form action="landing.php" method="post">
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label class="form-label px-4" for="kembalian">Kembalian</label>
                        <input type="text" name="kembalian" id="kembalian" class="form-control mx-4"
                            placeholder="Hasil Kembalian" value="<?php echo $kembalian ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Button trigger modal -->
<button type="button" style="margin-left: 70px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Simpan Transaksi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transaksi Berhasil <br>Kembali Ke Home</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <a href="landing.php" type="button" class="btn btn-primary" >Ok</a>
      </div>
    </div>
  </div>
</div>

<br><br>
<div class="bg-primary text-light" style="font-style: italic;">
    <footer><center>@copyright LuthvyAfirza</center></footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>