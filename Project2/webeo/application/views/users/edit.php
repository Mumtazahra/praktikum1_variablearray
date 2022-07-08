<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Users</h1>
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

        <div class="card-body">
        <?php echo form_open("users/save")?>

<div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="username" name="username" placeholder="Masukkan username" type="text" value="<?php echo $obj_users->username?> " class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" placeholder="Masukkan password" type="password" value="<?php echo $obj_users->password?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukkan email" type="email" value="<?php echo $obj_users->email?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="created_at" class="col-4 col-form-label">created at</label> 
    <div class="col-8">
      <input id="created_at" name="created_at" placeholder="Masukkan Tempat Lahir" type="timestamp" value="<?php echo $obj_users->created_at?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="last_login" class="col-4 col-form-label">Last login</label> 
    <div class="col-8">
      <input id="last_login" name="last_login" type="timestamp" value="<?php echo $obj_users->last_login?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-4 col-form-label">Status</label> 
    <div class="col-8">
      <input id="status" name="status" type="text" value="<?php echo $obj_users->status?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div> 
  <div class="form-group row">
    <label for="role" class="col-4 col-form-label">Role</label> 
    <div class="col-8">
      <input id="role" name="role" type="text" value="<?php echo $obj_users->role?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
