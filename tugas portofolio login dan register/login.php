<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){

        // verifikasi password
        if(password_verify($password, $user["password"])){

            // buat Session
            session_start();

            $_SESSION["user"] = $user;

            // login sukses, alihkan ke halaman timeline
            header("Location: admin.php");
            exit;
        }

    }

    $error = true;
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

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans&display=swap" rel="stylesheet" />

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!-- Sweetalert -->
    <script src="sweetalert/sweetalert2.all.min.js"></script>

    <style>
      * {
        padding: 0;
        margin: 0;
      }

      hr {
        width: 90%; 
        color: grey;
        margin: auto;
      }

      form {
        font-family: arial;
        width: 500px;
        margin: auto;
      }

      .hh5 {
           border: 3px solid #f1f1f1;
           height: 35px;
           font-size: 18px;
           padding-left: 5px;
           margin-bottom: 10px;
           font-family: arial;
           color: red;
      }

      input[type='text'],
      input[type='password'] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      label {
        color: #50626c;
        text-transform: uppercase;
      }

      button {
        background-color: #049372;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f03434;
      }

      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }

      img.avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
      }

      .container {
        padding: 10px;
      }

      span.pswrd {
        float: right;
        padding-top: 3px;
        padding-right: 2px;
      }

      span.signp {
        float: right;
        padding-top: 16px;
        padding-right: 3px;
      }

      span {
        color: #50626c;
      }
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.signp {
          display: block;
          float: none;
        }

        .cancelbtn {
          width: 100%;
        }
      }
    </style>

    <title>Login Admin</title>
  </head>
  <body class="bg-light">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
            
          <form action="" method="POST" class="shadow">

          <div class="fs-3 fw-bold text-center mx-auto mt-2 pt-2" style="margin-bottom: 10px; height: 50px; color: black; font-family: arial;">Sign in</div> <hr>
         
            <div class="imgcontainer">
              <img src="http://blog.tofte-it.dk/wp-content/uploads/2018/12/profile-picture.png" alt="Avatar" class="avatar" />
            </div>

            <div class="container">

            <?php if(isset($error)): ?>
              <div class="form-group"> 
                <div class="hh5"><i class="bi bi-info-circle"></i> Username atau Password anda salah!</div>
              </div>
            <?php endif; ?>

            <div class="form-group">
              <label for="username"><b>Username</b></label>
              <input class="form-control mb-4" type="text" placeholder="Username" name="username" required>
            </div>

            <div class="form-group">
              <label for="password"><b>Password</b></label>
              <input class="form-control mb-4" type="password" placeholder="Password" name="password" required>
            </div>
            
              <button type="submit" class="rounded-2" name="login">Sign in</button>
              <input type="checkbox" class="mt-2" checked="checked"><span class="mt-2"> Remember me</span><span class="pswrd"><a style="text-decoration: none;" href="#">Forgot Password?</a></span>
            </div>

            <div class="container" style="background-color: #f1f1f1">
              <button type="button" class="cancelbtn rounded-2" onclick='top.location="portofolio.php"'><i class="bi bi-arrow-left"></i> Back</button> 
              <span class="signp">Create an Account<a style="text-decoration: none;" href="register.php"> Sign up</a></span>
            </div>
          </form>
        </div>

      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
