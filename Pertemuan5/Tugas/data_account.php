<?php
require_once "class_cobaa.php";

$b1 = new akun('C001','Ahmad', number_format(6000000,0,".","."));
$b2 = new akun('C002','Budi', number_format(5350000,0,".","."));
$b3 = new akun('C003','Kurniawan',number_format(2500000,0,".","."));
$bank = [$b1,$b2,$b3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Bank</title>
  
</head>
<body>
    <table class="table">
        <h1 class="text-center mt-3">Bank Jaya</h1>
        <div class="container-fluid mb-3">
            <div class="row">
                <div class="col-md-5">

                <b><p>Aktivitas :</p></b>
    
                <p class="lead">Ahmad nabung : Rp. 1.000.000 <br>
                Budi tarik uang : Rp. 2.500.000</p>
                </div>
            </div>
        </div>
        <thead>
            <tr>
            <th scope="col">NO</th>
            <th scope="col">NO AKUN</th>
            <th scope="col">NAMA PEMILIK</th>
            <th scope="col">JUMLAH SALDO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($bank as $b){
            ?>
                <tr>
                    <td scope="row"><?=$nomor?></td>
                    <td><?=$b->no_akun?></td>
                    <td><?=$b->pemilik?></td>
                    <td><?=$b->saldo?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>