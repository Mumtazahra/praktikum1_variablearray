<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Daftar</title>
    <script>
        function hapusdaftar(pesan){
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
          <h3 class="card-title">Data Daftar</h3>
        </div>
        <div class="card-body">
        <table class="table table-bordered my-table">
                <thead>
                    <tr class="table-primary">
                        <td rowspan="2" width="5%">No</td>
                        <td rowspan="2">TANGGAL DAFTAR</td>
                        <td rowspan="2">ALASAN</td>
                        <td rowspan="2">USERS ID</td>
                        <td rowspan="2">KEGIATAN ID</td>
                        <td rowspan="2">KATEGORI PESERTA ID</td>
                        <td rowspan="2">NO SERTIFIKAT</td>
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
                    foreach ($daftar as $dft) {
                    ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $dft -> tanggal_daftar ?></td>
                        <td><?php echo $dft -> alasan ?></td>
                        <td><?php echo $dft -> users_id ?></td>
                        <td><?php echo $dft -> kegiatan_id ?></td>
                        <td><?php echo $dft -> kategori_peserta_id ?></td>
                        <td><?php echo $dft -> nosertifikat ?></td>
                        <td class="icon">
                             <a href=<?php echo base_url("index.php/daftar/edit/$dft->id") ?>
                            class="btn btn-warning btn-lg active"><i class="nav-icon fas fa-edit"></i></a> 
                        </td>
                        <td class="icon">
                            <a href= <?php echo base_url("index.php/daftar/delete/$dft->id") ?>
                            class="btn btn-danger btn-lg active" 
                            onclick=" return hapusdaftar('Apakah Anda yakin ingin menghapus data ini ?')" ><i class="nav-icon fas fa-trash"></i></a>
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