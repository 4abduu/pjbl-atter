<?php
session_start();
require('conn.php');
define ('BASEURL', 'http://localhost/pjbl-atter/code/ATter');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM login WHERE email='$email'";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($hasil);

    $pengacak = "awuie383uieakjAUI98a9w8auwe398HILUIAhid9a38";
    $passmd = md5($pengacak . md5($pengacak . $pass . $pengacak) . $pengacak);
    if ($passmd == $data['password']) {
        $_SESSION['level'] = $data['level'];
        $_SESSION['username'] = $data['username'];
        echo "<h2>Login Sukses</h2>";
        

        // Arahkan pengguna sesuai level mereka
        if ($_SESSION['level'] == "admin") {
            header("Location: ".BASEURL."/admin/index.php");
        } else if ($_SESSION['level'] == "user") {
            header("Location: ".BASEURL."/user/index.php");
        } else {
            echo "Level tidak valid.";
        }
    } else {
        echo "Login gagal";
    }

}

if (isset($_POST['signup'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $level = "user";

    if ($pass1 == $pass2) {
        $pengacak = "awuie383uieakjAUI98a9w8auwe398HILUIAhid9a38";
        $passmd = md5($pengacak . md5($pengacak . $pass1 . $pengacak) . $pengacak);
        $query = "INSERT INTO login (nama, username, email, password, level) VALUES ('$nama', '$username', '$email', '$passmd', '$level')";
        $hasil = mysqli_query($conn, $query);
        
        if ($hasil) {
            header("Location: /PJBL-ATter/code/ATter/user/index.php"); // Sesuaikan jalur ini
            exit(); // Pastikan untuk keluar setelah mengarahkan
        } else {
            echo "User gagal di daftarkan: " . mysqli_error($conn);
        }
    } else {
        echo "Password tidak sama!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="assets/styleTWt.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
      <section class="twt-features">
                <div class="features-div">
                    <img class="twt-icon" src='https://image.ibb.co/bzvrkp/search_icon.png'>
                    <p>Follow your interests.</p>
                    <img class="twt-icon" src="https://image.ibb.co/mZPTWU/heart_icon.png">
                    <p>Hear what people are talking about.</p>
                    <img class="twt-icon" src="https://image.ibb.co/kw2Ad9/conv_icon.png">
                    <p>Join the conversation.</p>
                </div>
            </section>

            <section class="twt-login">
                    <form action="" class="login-box" method="POST">
            <input class="input-box" name="email" type="email"  placeholder="Email">
            <input class="input-box" name="password" type="password" placeholder="Password">
            <!-- <a class="login-link" href="#">Forgot password?</a> -->
            <input type="submit" name="login" class="login-btn" value="Log In"> 
            <div class="con">
        </div>
    </form>
	                    <div class="slow-login">
                              <h1><b>ATter</b></h1>
                        <button class="login-small-display signin-btn pri-btn">Log in</button>
                        <span class="front-para">See what's happening in the world right now</span>
                        <span class="join">Join ATter Today.</span>
                        <button type="button" id="auto" class="signup-btn pri-btn" data-toggle="modal" data-target="#exampleModalCenter">
    Sign Up
</button>
                            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">Sign Up For Free</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">     
            <form action="" method="post"> 
                        <div class="form-group">
                       <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                    </div>
                    <br>
                    <div class="form-group">
                       <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <br>
                <div class="form-group">                  
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                </div><br>
                <div class="form-group">
                    <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div><br>
                <div class="form-group">
                    <input type="password" name="pass2" class="form-control" id="exampleInputPassword2" placeholder="Repeat Password">
                </div><br>
                  <div class="text-center">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                  </div>
            </form>      
      </div>
      
    </div>
  </div>
</div>
                    </div>
            </section>
</body>
</html>
<!-- Bootstrap JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
