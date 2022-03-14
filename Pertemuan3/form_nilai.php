<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2>Form Nilai</h2>
</br>
<form method="POST" action="nilai_siswa.php">
  <div class="container">
  <div class="form-group row">
    <label for="nama" class="col-2 col-form-label">Nama Lengkap</label> 
    <div class="col-3">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-2 col-form-label">Mata Kuliah</label> 
    <div class="col-3">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">Dasar Dasar Pemrograman</option>
        <option value="pemweb1">Pemrograman Web 1</option>
        <option value="so">Sistem Operasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-2 col-form-label">Nilai UTS</label> 
    <div class="col-2">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-2 col-form-label">Nilai UAS</label> 
    <div class="col-2">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-2 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-2">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="proses" type="submit" value = "Simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>