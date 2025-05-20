<?php
session_start();
if (!isset($_SESSION['user'])) {
  echo "<script>alert('Session expired, silakan login ulang.'); window.location.href='login.php';</script>";
  exit;
}

if (isset($_SESSION['Time']) && (time() - $_SESSION['Time'] > 2)){
  session_unset();
  session_destroy();
  header("Location: Login.php");
  exit;
}
?>
 
 <!DOCTYPE html>
  <html lang="id">
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Rumah Impian</title>
  <link rel="stylesheet" href="css/dashboard.css"/>
  <link rel="icon" type="image/x-icon" href="Assets/Logo.png">
  </head>
  <body>
    <div class="container" role="main" aria-label="Dashboard Perusahaan Properti">
      <nav class="sidebar" aria-label="Navigasi Utama">
      <div class="logo">
        <h6>
          <img src="Assets/Logo.png" alt="Logo Rumah Impian" class="logo-img" />
          <span class="logo-text">Rumah Impian</span>
        </h6>
      </div>

      <a href="#" class="nav-link active" aria-current="page" title="Dasbor" tabindex="0" aria-label="Dasbor">
        &#128200;<span class="text"> Dashboard</span>
      </a>
      <a href="#" class="nav-link" title="Properti" tabindex="0" aria-label="Properti">
        &#127968;<span class="text"> Properti</span>
      </a>
      <a href="#" class="nav-link" title="Penjualan" tabindex="0" aria-label="Penjualan">
        &#128181;<span class="text"> Penjualan</span>
      </a>
      <a href="#" class="nav-link" title="Pertanyaan" tabindex="0" aria-label="Pertanyaan">
        &#9993;<span class="text"> Pertanyaan</span>
      </a>
      <a href="#" class="nav-link" title="Pengaturan" tabindex="0" aria-label="Pengaturan">
        &#9881;<span class="text"> Pengaturan</span>
      </a>
      <a href="logout.php" class="nav-link" title="Back" tabindex="0" aria-label="Back" onclick="window.location.href='index.php'">
        	&#9204;<span class="text"> Kembali</span>
      </a>
      <div class="nav-section" aria-hidden="true">© 2025 Rumah Impian</div>
    </nav>
      <main class="content" tabindex="0">
        <header class="topbar">
          <h1>Dashboard</h1>
          <div class="profile">
            <div class="avatar" aria-label="Avatar Pengguna">A</div>
            <div class="username">Admin</div>
          </div>
        </header>
        <section class="summary-cards" aria-label="Statistik Ringkasan">
          <article class="card card-green" aria-labelledby="card-properties">
            <h3 id="card-properties">Properti Terdaftar</h3>
            <p>128</p>
          </article>
          <article class="card card-blue" aria-labelledby="card-sales">
            <h3 id="card-sales">Penjualan Bulan Ini</h3>
            <p>56</p>
          </article>
          <article class="card card-red" aria-labelledby="card-inquiries">
            <h3 id="card-inquiries">Pertanyaan Baru</h3>
            <p>18</p>
          </article>
        </section>
        <section class="properties-overview" aria-label="Ringkasan Properti Terbaru">
          <h2>Properti Terbaru</h2>
          <div class="property-list" tabindex="0" aria-label="Daftar properti terbaru">
            <div class="property">
              <div class="title" title="Rumah Type-A2">Rumah Type-A2</div>
              <div class="status available" aria-label="Status: Tersedia">Tersedia</div>
              <div class="price" aria-label="Harga Rp 430.000.000">Rp800Jt</div>
            </div>
            <div class="property">
              <div class="title" title="Rumah Type-A3">Rumah Type-A3</div>
              <div class="status sold" aria-label="Status: Terjual">Terjual</div>
              <div class="price" aria-label="Harga Rp 320.000.000">Rp820Jt</div>
            </div>
            <div class="property">
              <div class="title" title="Rumah Type-A4">Rumah Type-A4</div>
              <div class="status available" aria-label="Status: Tersedia">Tersedia</div>
              <div class="price" aria-label="Harga Rp 280.000.000">Rp280Jt</div>
            </div>
            <div class="property">
              <div class="title" title="Rumah Type-B1">Rumah Type-B1</div>
              <div class="status sold" aria-label="Status: Terjual">Terjual</div>
              <div class="price" aria-label="Harga Rp 950.000.000">Rp950Jt</div>
            </div>
            <div class="property">
              <div class="title" title="Rumah Type-B2">Rumah Type-B2</div>
              <div class="status available" aria-label="Status: Tersedia">Tersedia</div>
              <div class="price" aria-label="Harga Rp 600.000.000">Rp600Jt</div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>

  <script>
      let afkTimeout;

      function resetAfkTimer() {
          clearTimeout(afkTimeout);
          afkTimeout = setTimeout(() => {
              alert("Session Expired, silakan login ulang")
              window.location.href = 'Login.php';
          }, 10000);
      }

      window.onload = resetAfkTimer;
      document.onmousemove = resetAfkTimer;
      document.onkeypress = resetAfkTimer;
      document.onclick = resetAfkTimer;
      document.onscroll = resetAfkTimer;
  </script>
  </html>
