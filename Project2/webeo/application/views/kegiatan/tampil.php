<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan</title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kegiatan</h3>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
        <thead>
            <tr class="table-primary">
                <th>No</th>
                <th>JUDUL</th>
                <th>KAPASITAS</th>
                <th>HARGA TIKET</th>
                <th>TANGGAL</th>
                <th>NARASUMBER</th>
                <th>TEMPAT</th>
                <th>PIC</th>
                <th>FOTO FLYER</th>
                <th>JENIS ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($kegiatan as $keg) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $keg -> judul ?></td>
                <td><?php echo $keg -> kapasitas ?></td>
                <td><?php echo $keg -> harga_tiket ?></td>
                <td><?php echo $keg -> tanggal ?></td>
                <td><?php echo $keg -> narasumber ?></td>
                <td><?php echo $keg -> tempat?></td>
                <td><?php echo $keg -> pic ?></td>
                <td><?php echo $keg -> foto_flyer ?></td>
                <td><?php echo $keg -> jenis_id ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </section>
  </div>
</body>
</html>