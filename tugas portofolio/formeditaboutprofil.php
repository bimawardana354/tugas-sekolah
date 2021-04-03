<?php
include 'koneksi.php';

 
    $id_about_p = $_GET['id_about_p'];
    $sql = "SELECT * FROM about_profil WHERE id_about_p='$id_about_p'";
    $query = mysqli_query($connect, $sql);
    $pro = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <title>Edit Data Diri</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans&display=swap" rel="stylesheet" />

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!-- Sweetalert -->
    <script src="sweetalert/sweetalert2.all.min.js"></script>

    <style>
      body {
        background-color: #f1f2f6;
      }

      .kartu {
        width: 100%;
        box-shadow: 0 0.25rem 0.75rem #00000008;
        transition: all 0.3s;
        background-color: #d7e3fc;
        border: solid 8px #5ea0be;
        border-top-right-radius: 80px;
        border-bottom-left-radius: 80px;
      }

      .kartu:hover {
        background-color: #d7e3fc;
        border: solid 8px #5ea0be;
        border-top-left-radius: 80px;
        border-bottom-right-radius: 80px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
      }

      .card {
        width: 1000px;
        height: 700px;
        margin: auto;
      }

      form {
        margin: 40px 10px 10px 25px;
      }
    </style>
  </head>
  <body>
    <!-- Edit -->

    <div class="container">
      <div class="row">
        <div class="list shadow-sm fs-4 fw-bold rounded-3 text-center mx-auto mt-4 pt-2" style="width: 1000px; margin-bottom: 10px; height: 50px; color: #fff; background-color: #4b7bec">
          <i class="bi bi-pencil-square"></i> Edit Data Diri
        </div>
      </div>

      <div class="card kartu">
        <form action="editaboutprofil.php" method="POST">
          <input type="hidden" class="mb-2 mt-2" name="id_about_p" value="<?php echo $pro['id_about_p']?>" />

          <div class="form-group row">
            <label for="namaabout" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
              <input type="text" class="form-control mb-4" name="nama_about" value="<?php echo $pro['nama_about']?>" />
            </div>
          </div>

          <div class="form-group row">
            <label for="jeniskelamin" class="col-sm-3 mb-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-8"><input type="radio" class="mb-4 mt-3" name="jk" id="cowo" value="Laki-laki" /> Laki-laki <input type="radio" class="mb-4 mt-3" name="jk" id="cewe" value="Perempuan" /> Perempuan</div>
          </div>

          <div class="form-group row">
            <label for="pendidikansekolah" class="col-sm-3 col-form-label">Pendidikan Sekolah</label>
            <div class="col-sm-8">
              <select class="mb-4 mt-2" name="sekolah">
                <option><?php echo $pro['sekolah']?></option>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMK">SMK</option>
                <option value="SMA">SMA</option>
                <option value="Kuliah">Kuliah</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="umurr" class="col-sm-3 col-form-label">Umur</label>
            <div class="col-sm-8">
              <input type="number" class="form-control mb-4" name="umur" value="<?php echo $pro['umur']?>" />
            </div>
          </div>

          <div class="form-group row">
            <label for="agamaa" class="col-sm-3 col-form-label">Agama</label>
            <div class="col-sm-8">
              <select class="mb-4 mt-2" name="agama">
                <option><?php echo $pro['agama']?></option>
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Kong Hu Chu">Kong Hu Chu</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="tempatlahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
            <div class="col-sm-8">
              <input type="text" class="form-control mb-4" name="tempat_lahir" value="<?php echo $pro['tempat_lahir']?>" />
            </div>
          </div>

          <div class="form-group row">
            <label for="tanggallahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
              <input type="date" class="form-control mb-4" name="tanggal_lahir" value="<?php echo $pro['tanggal_lahir']?>" />
            </div>
          </div>

          <div class="form-group row">
            <label for="alamatt" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="alamat" rows="5"><?php echo $pro['alamat']?></textarea>
            </div>
          </div>

          <div class="form-group float-end me-5 mt-4">
            <button type="button" style="width: 100px" class="btn btn-lg btn-outline-danger mt-2" onclick='top.location="admin.php"'>Cancel</button>
            <button type="submit" style="width: 100px" id="btn" class="btn btn-lg btn-outline-dark mt-2 ms-4 me-5" name="simpaneditaboutprofil">Edit</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Akhir Edit-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
