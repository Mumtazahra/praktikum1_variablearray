<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kegiatan</title>
    <script>
        function hapusjkegiatan(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>


</br>

<body style="background-color: #E9AE8C;">
<div class="content-wrapper" style="background-color: #E9AE8C;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
    <div class="container">
    <div class="col-md-5">
    <div>
    <?php
    $username = $this->session->userdata('username');
    if($username) {
        echo "<h4>Selamat Datang $username</h4>";
    }
    ?>
    </div>
    <h3>Jenis Kegiatan</h3>
    <table border="1" class="table" style="background-color: #ffffff;">
        <thead>
            <tr>
                <th>No</th>
                <th>NAMA</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($jenis_kegiatan as $jkg) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $jkg -> nama ?></td>
                <td>
                    <a href=<?php echo base_url("index.php/jenis_kegiatan/edit/$jkg->id") ?>
                         class="btn btn-success btn-lg active">Edit</a>
                    <a href= <?php echo base_url("index.php/jenis_kegiatan/delete/$jkg->id") ?> 
                        class="btn btn-danger btn-lg active"
                        onclick=" return hapusjkegiatan('Apakah Anda yakin ingin menghapus data kegiatan ini ?')" >Hapus</a>                  
                </td>
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