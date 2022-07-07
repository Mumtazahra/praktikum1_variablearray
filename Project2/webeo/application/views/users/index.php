<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Users</title>
</head>

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
    <h3>Data Users</h3>
    <table border="1" class="table" style="background-color: #ffffff;">
        <thead>
            <tr>
                <th>No</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>EMAIL</th>
                <th>CREATED AT</th>
                <th>LAST LOGIN</th>
                <th>STATUS</th>
                <th>ROLE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($users as $usr) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $usr -> username ?></td>
                <td><?php echo $usr -> password ?></td>
                <td><?php echo $usr -> email ?></td>
                <td><?php echo $usr -> created_at ?></td>
                <td><?php echo $usr -> last_login ?></td>
                <td><?php echo $usr -> status?></td>
                <td><?php echo $usr -> role ?></td>
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