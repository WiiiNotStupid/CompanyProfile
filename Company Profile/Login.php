<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === "admin" && $password === "admin123") {
        $_SESSION['user'] = $username;
        $_SESSION['Time'] = time();
        header("Location: dashboard.php");
        exit;
    } else {
        $error_message = "Nama pengguna atau kata sandi salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Rumah Impian Login</title>
<link rel="stylesheet" href="css/login.css">
<link rel="icon" type="image/x-icon" href="Assets/Logo.png">
</head>
<body>
  <div class="login-container" role="main" aria-label="Form Login Rumah Impian">
    <h2>Selamat Datang</h2>
    <p class="welcome-msg">Masuk untuk mengakses Dashboard Rumah Impian</p>

    <?php if (isset($error_message)) { ?> 
      <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>


    <form class="login-form" action="#" method="POST" aria-label="Form Login">
      <label for="username">Nama Pengguna atau Email</label>
      <input type="text" id="username" name="username" required autocomplete="username" placeholder="Masukkan nama pengguna atau email" />
      
      <label for="password">Kata Sandi</label>
      <input type="password" id="password" name="password" required autocomplete="current-password" placeholder="Masukkan kata sandi" />
      
      <div class="button-group">
        <button type="submit" class="login-btn">Masuk</button>
        <button type="button" class="cancel-btn" onclick="window.location.href='index.php'">Batal</button>
      </div>
    </form>
  </div>
</body>
</html>
