<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body style="background-color: lightblue">
<nav class="navbar navbar-expand-sm bg-dark p-3">

  <div class="container-fluid">
    <img src= "123.png" width="55px"/>
  
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="https://zh.wikipedia.org/zh-tw/%E5%BF%83%E8%A1%80%E7%AE%A1%E7%96%BE%E7%97%85">了解心血管疾病</a>
        </li>
    </ul>
  </div>

</nav>
<div class="container">
            <div class="row justify-content-center">
            
            <div class="col-md-auto">
            <br>
            <br>
            <br>
    <h1 class="animate__animated animate__bounce">Log In</h1><br>
    <h2 class="animate__animated animate__rubberBand">歡迎來到我們的網站</h2><br>
<form method="post" action="login.php">
帳號(使用者名稱)：
<br><input type="text" name="username"><br/><br/>
密碼：
<br><input type="password" name="password"><br><br>
<input class="btn btn-success " type="submit" value="登入" name="submit"><br><br>
<a class="animate__animated animate__flash" href="register.html">註冊帳號請點我！</a>

</div>
</div>
</div>
</form>
</body>
</html>
