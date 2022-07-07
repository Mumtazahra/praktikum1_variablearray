<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="container">
<h2>Form edit Kegiatan</h2>
<?php echo form_open("kegiatan/save") ?>
  <div class="form-group row">
    <label for="judul" class="col-4 col-form-label">judul</label> 
    <div class="col-8">
      <input id="judul" name="judul" placeholder="Masukkan judul" type="text" value="<?php echo $obj_kegiatan->judul?> " class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="kapasitas" class="col-4 col-form-label">Kapasitas</label> 
    <div class="col-8">
      <input id="kapasitas" name="kapasitas" placeholder="Masukkan kapasitas" type="text" value="<?php echo $obj_kegiatan->kapasitas?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Harga Tiket</label> 
    <div class="col-8">
      <input id="harga_tiket" name="harga_tiket" placeholder="Masukkan Harga Tiket" type="text" value="<?php echo $obj_kegiatan->harga_tiket?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" type="date" value="<?php echo $obj_kegiatan->tanggal?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="narasumber" class="col-4 col-form-label">Narasumber</label> 
    <div class="col-8">
      <input id="narasumber" name="narasumber" type="text" value="<?php echo $obj_kegiatan->narasumber?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat</label> 
    <div class="col-8">
      <input id="tempat" name="tempat" type="text" value="<?php echo $obj_kegiatan->tempat?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_id" class="col-4 col-form-label">Jenis id</label> 
    <div class="col-8">
      <input id="jenis_id" name="jenis_id" type="text" value="<?php echo $obj_kegiatan->jenis_id?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="main-footer" style="background-color: #D5D7CC; width : 100%">
    <div class="float-left" >
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="#">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js')?>"></script>
</body>
</html>

