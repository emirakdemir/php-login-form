<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Yönetici Sayfası</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Merhaba, <span>Yönetici</span></h3>
      <h1>Hoş Geldiniz <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Burası Yönetici Sayfası</p>
      <a href="login_form.php" class="btn">Yeniden Giriş Yap</a>
      <a href="register_form.php" class="btn">Yeniden Kayıt Ol</a>
      <a href="logout.php" class="btn">Çıkış Yap</a>
   </div>

</div>

</body>
</html>