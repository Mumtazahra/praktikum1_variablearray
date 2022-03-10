<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>

  <h1>Belanja Online</h1>

</br>

<table border="1" align="right">
    <tr style="background-color: blue;">
        <td>Daftar Harga</td>
    </tr>
    <tr>
        <td>TV : 4.200.000</td>
    </tr>
    <tr>
        <td>Kulkas : 3.100.000 </td>
    </tr>
    <tr>
        <td>Mesin Cuci : 3.800.000</td>
    </tr>
    <tr style="background-color: blue;">
        <td>Harga Dapat berubah Setiap Saat</td>
    </tr>
</table>

<form  method="POST" action="form_belanja.php">
<div class="container">
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-3">
      <input id="customer" name="customer" placeholder="Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button style="background-color: green;" name="proses" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</div>
</form>

</br>

<h1>Ini HASILNYA</h1>

<?php
$proses = $_POST['proses'];
$nama_customer = $_POST['customer'];
$nama_produk = $_POST['produk'];
$jumlah_produk = $_POST['jumlah'];

if($nama_produk == "tv"){
$total = $jumlah_produk * 4200000;
}elseif($nama_produk == "kulkas"){
  $total = $jumlah_produk * 3100000;
}elseif($nama_produk == "mesin"){
  $total = $jumlah_produk * 3800000;
}

echo "Nama Customer : $nama_customer";
echo "</br>Nama Produk : $nama_produk";
echo "</br>Jumlah Produk : $jumlah_produk";
echo "</br>Total : $total";
?>

</body>
</html>