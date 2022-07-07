
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <style>
        .content{
            justify-content: center;
            width: 550px;
            height: 3500px;
        }
    </style>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE-3.1.0/dist/css/adminlte.min.css">
</head>
<body style="background-color: #E9AE8C;">
<div class="content-wrapper" style="background-color: #E9AE8C;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Registrasi Akun</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="post" action="<?php echo base_url(); ?>index.php/regis/proses">
                <div class="card-body">
                     <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="username" name="username" class="form-control" id="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="role">Role</label>
                      <div>
                        <select id="role" name="role" class="custom-select">
                          <option value="admin">Admin</option>
                          <option value="public">Public</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="created_at">Created At</label>
                      <input type="date" name="created_at" class="form-control" id="created_at" placeholder="created_at">
                    </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button><a href="<?php echo base_url("index.php/login/index")?>"><u>Login</u></a>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
  
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    </div>
        </div>
        </div>
    </section>

    </div>
</body>
</html>