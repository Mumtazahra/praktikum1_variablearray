
<div class="content-wrapper" style="background-color: #E9AE8C;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Daftar</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
        <div class="card-body">
        <div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="body">
<?php echo form_open("daftar/save") ?>
<div class="form-group row">
    <label for="tanggal_daftar" class="col-3 col-form-label">Tanggal</label> 
    <div class="col-5">
      <input id="tanggal_daftar" name="tanggal_daftar" type="date" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
</div>
  <div class="form-group row">
    <label for="alasan" class="col-3 col-form-label">Alasan</label> 
    <div class="col-5">
      <input id="alasan" name="alasan" placeholder="Masukkan Alasan" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="kegiatan_id" class="col-3 col-form-label">Kegiatan Id</label> 
    <div class="col-5">
      <input id="kegiatan_id" name="kegiatan_id" placeholder="Masukkan Kegiatan Id" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori_peserta_id" class="col-3 col-form-label">Kategori Peserta Id</label> 
    <div class="col-5">
      <input id="kategori_peserta_id" name="kategori_peserta_id" placeholder="Masukkan Kategori peserta id" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-5">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </section>
<?php echo form_close() ?>
</body>