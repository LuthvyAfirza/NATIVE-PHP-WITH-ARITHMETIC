<?php 

$paraproduct = array (
    array("Honda Civic Typer R", "Knalpot keluar api dengan menggunakan nitro",100000,"civic.png"),
    array("Jaket Trafalgar Law Dressrosa", "Jaket yang digunakan Trafalgar Law di arc Dressrosa",500000,"jaket.png"),
    array("Senjata Murakumogiri", "Senjata yang digunakan oleh Whitebeard/Shirohige",50000,"murakumogiri.png"),
    array("Dijual Temen", "Bisa ngoding ,PHP,Laravel, bisa buat temen mabar ml,roblox,dll",20000,"temen.png"),
    );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="landing.php">Home</a>
            <a class="navbar-brand" href="transaksi.php">Transaksi</a>
            <a class="navbar-brand" href="login.html? alert=logout">Logout</a>
        </div>
</nav>

<br>
<center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="banner.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</center>
<br>
<h3 style="margin-left: 20px;">Daftar Produk School Mart</h3>
<br>

    <div class="container">
        <div class="row">
        <?php foreach ($paraproduct as $values =>$paket) {?>
            <div class="col-md-3">
                <div class="card mt-2">
                    <img class="card-img-top" src="<?php echo $paket[3] ?>" alt="" height="200px">
                    <div class="card-body tescard">
                        <h5><p><?php echo $paket[0]; ?></p></h5>
                        <p><?php echo $paket[1]; ?></p>
                        <p><?php echo $paket[2]; ?></p>
                    </div>
                </div>
                
                <form action="transaksi.php" method="POST">
                    <input type="hidden" name="data1" id="data" value="<?php echo $paket[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $paket[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $paket[2] ?>">
                    <button class=" btn btn-primary mt-2">
                       PILIH PRODUK
                    </button>
                </form>
            </div>
            <?php } ?>

        </div>
    </div>
    <br>

<div class="bg-primary text-light" style="font-style: italic;">
    <footer><center>@copyright LuthvyAfirza</center></footer>
</div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>