<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Daftar</title>
    <script>
        function hapuskegiatan(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <style>
        .my-table thead td, .icon {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <?php
            $username = $this->session->userdata('username');
            if($username) {
                echo "<h2>Selamat Datang $username</h2>";
            }
            ?>
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
        <table class="table table-bordered my-table">
                <thead>
                    <tr class="table-primary">
                        <td rowspan="2" width="5%">No</td>
                        <td rowspan="2">JUDUL</td>
                        <td rowspan="2">KAPASITAS</td>
                        <td rowspan="2">HARGA TIKET</td>
                        <td rowspan="2">TANGGAL</td>
                        <td rowspan="2">NARASUMBER</td>
                        <td rowspan="2">TEMPAT</td>
                        <td rowspan="2">PIC</td>
                        <td rowspan="2">FOTO FLYER</td>
                        <td rowspan="2">JENIS ID</td>
                        <td colspan="2" width="10%">ACTION</td>
                    </tr>
                    <tr class="table-info">
                        <td>Ubah</td>
                        <td>Hapus</td>
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
                        <td  class="icon">
                        <a href=<?php echo base_url("index.php/kegiatan/edit/$keg->id") ?>
                            class="btn btn-warning btn-lg active"><i class="nav-icon fas fa-edit"></i></a>
                        </td>
                        <td class="icon">
                        <a href= <?php echo base_url("index.php/kegiatan/delete/$keg->id") ?> 
                            class="btn btn-danger btn-lg active"
                            onclick=" return hapuskegiatan('Apakah Anda yakin ingin menghapus data kegiatan ini ?')" ><i class="nav-icon fas fa-trash"></i></a>  
                        </td>
                    </tr>
                    <?php
                    $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
</body>
</html>