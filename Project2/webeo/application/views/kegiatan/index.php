<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kegiatan</title>
    <script>
        function hapuskegiatan(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>

</br>
</br>
</br>
</br>

<body style="background-color: #E9AE8C;" >
<div class="content-wrapper" style="background-color: #E9AE8C;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"> 
            <div class="container">
            <div class="col-md-5">
            <h3>Data Kegiatan</h3>
            <table border="1" class="table" style="background-color: #ffffff;">
                <thead>
                    <tr>
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
                        <th>ACTION</th>
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
                        <td>
                        <a href=<?php echo base_url("index.php/kegiatan/edit/$keg->id") ?>
                            class="btn btn-success btn-lg active">Edit</a>
                        <a href= <?php echo base_url("index.php/kegiatan/delete/$keg->id") ?> 
                            class="btn btn-danger btn-lg active"
                            onclick=" return hapuskegiatan('Apakah Anda yakin ingin menghapus data kegiatan ini ?')" >Hapus</a>  
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
</body>
</html>