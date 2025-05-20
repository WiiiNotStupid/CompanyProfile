<?php 
$error_message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirm-password'])) {
        $error_message = "Semua field harus diisi!";
    }

    else if ($_POST['password'] !== $_POST['confirm-password']) {
        $error_message = "Kata sandi dan konfirmasi kata sandi tidak cocok!";
    } else {
        header("Location: index.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="css/daftar.css">
<link rel="icon" type="image/x-icon" href="Assets/Logo.png">
<title>Rumah Impian Daftar</title>
</head>
<body>
  <div class="register-container" role="main" aria-label="Form Daftar Rumah Impian">
    <h2>Buat Akun Baru</h2>
    <p class="welcome-msg">Isi form berikut untuk mendaftar ke Rumah Impian</p>
        <?php if (!empty($error_message)) { ?>
          <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?>
    <form class="register-form" action="#" method="POST" aria-label="Form Daftar">
      <label for="fullname">Nama Lengkap</label>
      <input type="text" id="fullname" name="fullname" required autocomplete="name" placeholder="Masukkan nama lengkap" />
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required autocomplete="email" placeholder="Masukkan email" />
      
      <label for="username">Nama Pengguna</label>
      <input type="text" id="username" name="username" required autocomplete="username" placeholder="Buat nama pengguna" />
      
      <label for="password">Kata Sandi</label>
      <input type="password" id="password" name="password" required autocomplete="new-password" placeholder="Masukkan kata sandi" />
      
      <label for="confirm-password">Konfirmasi Kata Sandi</label>
      <input type="password" id="confirm-password" name="confirm-password" required autocomplete="new-password" placeholder="Masukkan ulang kata sandi" />
      
      <div class="button-group">
        <button type="submit" class="register-btn">Daftar</button>
        <button type="button" class="cancel-btn" onclick="window.location.href='index.php'">Batal</button>
      </div>
    </form>
  </div>
</body>
</html>
