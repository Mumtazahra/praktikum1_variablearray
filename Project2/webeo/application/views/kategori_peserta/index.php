<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kategori_peserta</title>
    <script>
        function hapuskategori_peserta(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <style>
        .my-table thead td, .icon{
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
          <h3 class="card-title">Kategori Peserta</h3>
        </div>
        <div class="card-body">
        <table class="table table-bordered my-table">
                <thead>
                     <tr class="table-primary">
                        <td rowspan="2" width="5%">No</td>
                        <td rowspan="2">NAMA</td>
                        <td colspan="2" width="10%">Action</td>
                    </tr>
                    <tr class="table-info">
                        <td>Ubah</td>
                        <td>Hapus</td>
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
                        <td class="icon">
                             <a href=<?php echo base_url("index.php/kategori_peserta/edit/$kps->id") ?>
                            class="btn btn-warning btn-lg active"><i class="nav-icon fas fa-edit"></i></a> 
                        </td>
                        <td class="icon">
                            <a href= <?php echo base_url("index.php/kategori_peserta/delete/$kps->id") ?>
                            class="btn btn-danger btn-lg active" 
                            onclick=" return hapuskategori_peserta('Apakah Anda yakin ingin menghapus data ini ?')" ><i class="nav-icon fas fa-trash"></i></a>
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