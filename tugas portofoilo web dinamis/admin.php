<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <style>
      .navbar {
        background-color: #4174ff;
      }

      button.btn-secondary {
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 500;
        background-color: transparent;
        border: 1px solid #fff;
        color: #fff;
        margin-top: 4px;
      }

      button.btn-secondary:hover {
        background-color: #ffff;
        color: #4174ff;
      }

      button.btn-primary {
        padding: 5px 10px;
        border-radius: 3px;
        font-weight: 500;
        background-color: #4174ff;
        border: 1px solid #000000;
        color: #ffffff;
        margin-top: 4px;
      }

      button.btn-primary:hover {
        background-color: #ffff;
        color: #4174ff;
      }

      .aa {
        text-decoration: none;
        color: #fff;
      }

      .jumbotron {
        padding-top: 6rem;
        background-color: #e2edff;
      }

      section {
        padding-top: 5rem;
      }

      .gallery {
        background-color: #e2edff;
      }

      footer {
        background-color: #4174ff;
      }
    </style>

    <title>Admin</title>
  </head>
  <body id="home">
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="">Bima Wardana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item ms-2">
              <button type="button" class="btn-secondary" onclick='top.location="portofolio.php"'>User</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Akhir Navbar -->

    <!-- Jumbotron -->

    <section class="jumbotron text-center">

      <?php
      $id_profil = mysqli_query($connect,'SELECT * FROM profil');
      while ($prdk = mysqli_fetch_array($id_profil)){
          $idp = $prdk['id_profil'];

    ?>

      <img src="<?php echo $prdk['foto_profil'] ?>" alt="Bima Wardana" width="300" height="300" class="rounded-circle" />
      <h1 class="display-4"><?php echo $prdk['nama_profil'] ?></h1>
      <p class="lead"><?php echo $prdk['kalimat_profil'] ?></p>
      <button type="button" class="btn-primary"><a class="aa" href="formeditprofil.php?id_profil=<?php echo $prdk['id_profil']; ?>">Edit Profil</a></button> 

    <?php
        }
    ?>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L26.7,176C53.3,160,107,128,160,144C213.3,160,267,224,320,256C373.3,288,427,288,480,261.3C533.3,235,587,181,640,165.3C693.3,149,747,171,800,186.7C853.3,203,907,213,960,229.3C1013.3,245,1067,267,1120,266.7C1173.3,267,1227,245,1280,218.7C1333.3,192,1387,160,1413,144L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir Jumbotron -->

    <!-- About -->

    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5">
          <?php
          $id_about_p = mysqli_query($connect,'SELECT * FROM about_profil');
          while ($tmpil = mysqli_fetch_array($id_about_p)){
              $idp = $tmpil['id_about_p'];
    
          ?>

          <div class="col-md-4">
            <h4>Data Diri</h4>
            <br />
            <p>
              Nama :
              <?php echo $tmpil['nama_about'] ?>
            </p>
            <p>
              Jenis Kelamin :
              <?php echo $tmpil['jk'] ?>
            </p>
            <p>
              Sekolah :
              <?php echo $tmpil['sekolah'] ?>
            </p>
            <p>
              Umur :
              <?php echo $tmpil['umur'] ?>
            </p>
            <p>
              Agama :
              <?php echo $tmpil['agama'] ?>
            </p>
            <p>
              Tempat, Tanggal Lahir :
              <?php echo $tmpil['ttl'] ?>
            </p>
            <p>
              Alamat :
              <?php echo $tmpil['alamat'] ?>
            </p>  

            <button type="button" class="btn-primary"><a class="aa" href="formeditaboutprofil.php?id_about_p=<?php echo $tmpil['id_about_p']; ?>">Edit Data Diri</a></button> 

          </div>

          <?php
            }
        ?>

          <?php
            $id_about = mysqli_query($connect,'SELECT * FROM about');
            while ($tmpill = mysqli_fetch_array($id_about)){
                $idp = $tmpill['id_about'];
    
          ?>

          <div class="col-md-4" align="justify"> 

            <p class="mt-2"><?php echo $tmpill['isi_about'] ?></p>

            <button style="float: right" type="button" class="btn-primary"><a class="aa" href="formeditabout.php?id_about=<?php echo $tmpill['id_about']; ?>">Edit About</a></button> 
          </div>

          <?php
            }
         ?>

        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,128L48,149.3C96,171,192,213,288,213.3C384,213,480,171,576,138.7C672,107,768,85,864,112C960,139,1056,213,1152,224C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir About -->

    <!-- Gallery -->

    <section id="gallery" class="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Gallery</h2>
          </div>
        </div>

       <!-- Table Produk -->

       <div class="row justify-content-center">
        <div style="overflow-y: auto; width: 1230px; height: 500px; padding: 0 10px 0 0; border: none; margin: 15px 0 10px 0">
            <table class="table table-striped table-bordered ms-3 cellspacing="0" style="border: 1px solid #c4c4c4; font-size: 16px; width: 1200px;">
                  <thead style="background: #4174ff; color: #ffffff;">
                    <tr align="center">
                      <th scope="col" width="50px">No</th>
                      <th scope="col">Foto Gallery</th>
                      <th scope="col" width="400px">Keterangan</th>
                      <th scope="col" width="250px">Modify</th>
                    </tr>
                  </thead>
                  <tbody style="color: #000000; text-align: center; align-content: center;">
               <?php
      
                $sql = "SELECT * FROM gallery";
                $query = mysqli_query($connect,$sql);
                $no_urut = 0;
      
              while($tmpl = mysqli_fetch_array($query)){
                      $no_urut++;
                      echo "<tr>";
      
                      echo "<td>".$no_urut."</td>";
                      echo "<td><img src='".$tmpl['foto_gallery']."'style='width:300px; height:300px;'></td>";
                      echo "<td>".$tmpl['keterangan']."</td>";
                    
                      echo"<td>";
                      echo"<a href='formeditgallery.php?id_gallery=".$tmpl['id_gallery']."' class='btn btn-warning'>Edit</a> | ";
                      echo"<a href='hapusgallery.php?id_gallery=".$tmpl['id_gallery']."' class='btn btn-danger'>Hapus</a>";
      
                      echo"</td>";
                      echo"</tr>";
                  }
                  ?> 
                </tbody>
              </table>
            </div> 
        </div>

        <!-- Akhir table produk -->
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L26.7,202.7C53.3,213,107,235,160,234.7C213.3,235,267,213,320,176C373.3,139,427,85,480,101.3C533.3,117,587,203,640,202.7C693.3,203,747,117,800,85.3C853.3,53,907,75,960,101.3C1013.3,128,1067,160,1120,181.3C1173.3,203,1227,213,1280,208C1333.3,203,1387,181,1413,170.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir Gallery -->

    <!-- Contact -->

    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Table Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div style="overflow-y: auto; width: 1230px; height: 500px; padding: 0 10px 0 0; border: none; margin: 15px 0 10px 0">
                <table class="table table-striped table-bordered ms-3 cellspacing="0" style="border: 1px solid #c4c4c4; font-size: 16px; width: 1200px;">
                    <thead style="background: #4174ff; color: #ffffff;">
                      <tr align="center">
                        <th scope="col" width="50px">No</th>
                        <th scope="col" width="250px">Nama Lengkap</th>
                        <th scope="col" width="225px">Email</th>
                        <th scope="col" width="200px">Nomor Telepon</th>
                        <th scope="col" width="400px">Pesan</th>
                        <th scope="col" width="125px">Modify</th>
                      </tr>
                    </thead>
                    <tbody style="color: #000000; text-align: center; align-content: center;">
                  <?php
          
                  $sql = "SELECT * FROM contact";
                  $query = mysqli_query($connect,$sql);
                  $no_urut = 0;
          
                  while($tampil = mysqli_fetch_array($query)){
                          $no_urut++;
                          echo "<tr>";
          
                          echo "<td>".$no_urut."</td>";
                          echo "<td>".$tampil['nama_lengkap']."</td>";
                          echo "<td>".$tampil['email']."</td>";
                          echo "<td>".$tampil['no_telepon']."</td>";
                          echo "<td>".$tampil['pesan']."</td>";
                          
                          echo"<td>";
                       
                          echo"<a href='hapuscontact.php?id=".$tampil['id']."' class='btn btn-danger'>Hapus</a>";
          
                          echo"</td>";
                          echo"</tr>";
                      }
                      ?> 
                    </tbody>
                  </table>
                </div> 
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#4174ff"
          fill-opacity="1"
          d="M0,256L26.7,234.7C53.3,213,107,171,160,181.3C213.3,192,267,256,320,282.7C373.3,309,427,299,480,272C533.3,245,587,203,640,202.7C693.3,203,747,245,800,240C853.3,235,907,181,960,170.7C1013.3,160,1067,192,1120,218.7C1173.3,245,1227,267,1280,261.3C1333.3,256,1387,224,1413,208L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir Contact -->

    <!-- Footer -->

    <?php
        require('footer.php');
      ?>

    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
