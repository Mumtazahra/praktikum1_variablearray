<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Peserta</title>
    <style>
        .body{
            justify-content : center;
        }
    </style>
</head>

<body class="body" style="background-color: #E9AE8C;">
<div class="content-wrapper" style="background-color: #E9AE8C;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
    <div class="container">
    <div class="col-md-5">
    <h3>Kategori Peserta</h3>
    <table border="1" class="table" style="background-color: #ffffff;">
        <thead>
            <tr>
                <th>No</th>
                <th>NAMA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($kategori_peserta as $kps) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $kps -> nama ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
        </div>
        </div>
    </section>
    </div>
</body>
</html>