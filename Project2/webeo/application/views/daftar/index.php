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
</head>
<?php
$username = $this->session->userdata('username');
if($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>

</br>
</br>
</br>
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
            <h3>Data Daftar</h3>
            <table border="1" class="table" style="background-color: #ffffff">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>TANGGAL DAFTAR</th>
                        <th>ALASAN</th>
                        <th>USERS ID</th>
                        <th>KEGIATAN ID</th>
                        <th>KATEGORI PESERTA ID</th>
                        <th>NO SERTIFIKAT</th>
                        <th>ACTION</th>
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
                        <td>
                        <a href=<?php echo base_url("index.php/daftar/edit/$dft->id") ?>
                            class="btn btn-success btn-lg active">Edit</a> 
                        <a href= <?php echo base_url("index.php/daftar/delete/$dft->id") ?> 
                            class="btn btn-danger btn-lg active" 
                            onclick=" return hapusdaftar('Apakah Anda yakin ingin menghapus data ini ?')" >Hapus</a>
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