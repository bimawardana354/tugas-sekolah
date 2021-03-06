<?php
include 'koneksi.php';

 
    $id_gallery = $_GET['id_gallery'];
    $sql = "SELECT * FROM gallery WHERE id_gallery='$id_gallery'";
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

    <title>Edit Profil</title>

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
          transition: all .3s;
          background-color: #d7e3fc ;
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
        height: 400px;
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
                <div class="list shadow-sm fs-4 fw-bold rounded-3 text-center mx-auto mt-4 pt-2" style="width: 1000px; margin-bottom: 10px; height: 50px; color: #fff; background-color: #4b7bec"><i class="bi bi-pencil-square"></i> Edit Gallery</div>
              </div>

              <div class="card kartu">
                <form action="editgallery.php" method="POST">

                  <input type="hidden" class="mb-2  mt-2" name="id_gallery" value="<?php echo $pro['id_gallery']?>">

                      <div class="form-group row">
                          <label for="fotogallery" class="col-sm-3 col-form-label">Foto Gallery</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control mb-4" name="foto_gallery" value="<?php echo $pro['foto_gallery']?>">
                          </div>
                      </div> 

                      <div class="form-group row">
                          <label for="ket" class="col-sm-3 col-form-label">Keterangan</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control mb-4" name="keterangan" value="<?php echo $pro['keterangan']?>">
                          </div>
                      </div>
                                                                 
                      <div class="form-group float-end me-5 mt-5">
                          <button type="button" style="width: 100px;" class="btn btn-lg btn-outline-danger" onclick='top.location="admin.php"'>Cancel</button>
                          <button type="submit" style="width: 100px;" class="btn btn-lg btn-outline-dark ms-4 me-5" name="simpaneditgallery">Edit</button> 
                      </div>
             </form>
             
            </div>                                 

              </div>
            </div>
                        

            <!-- Akhir Edit-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>