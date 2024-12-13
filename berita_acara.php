<?php
include 'koneksi/koneksi.php';


// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Logistik</title>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo">
        <img src="img/pln-logo.png" alt="logo" id="logo_img">
        <div class="logo_text">PLN <br>Indonesia Power</div>
        <i class='bx bx-menu-alt-right' id="btn"></i>
      </div>

      <div class="nav_list">
        <ul>
          <li>
            <a href="#">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
          </li>

          <li>
            <a href="#">
              <i class='bx bx-book'></i>
              <span class="links_name">Buat Berita Acara</span>
            </a>
            <span class="tooltip">Buat Berita Acara</span>
          </li>

          <li>
            <a href="History.html">
              <i class='bx bx-bar-chart'></i>
              <span class="links_name">History</span>
            </a>
            <span class="tooltip">History Berita Acara</span>
          </li>

          <li>
            <a href="javascript:void(0);" id="logoutButton">
              <i class='bx bx-exit'></i>
              <span class="links_name">Log Out</span>
            </a>
            <span class="tooltip">Log Out</span>
          </li>
        </ul>

        <div class="info">
          <a href="#">
            <img src="img/avatar.jpg" alt="avatar" class="avatar">
            <div class="table">
              <div class="table_text">
                <p> <span>PT.PLN (Persero)</span> <br> Listrik untuk Kehidupan yang Lebih Baik <br></p>
              </div>
            </div>
          </a>
          <div class="tooltip">
            <span class="name">PT.PLN (Persero) Indonesia Power</span>
            <span class="country">Indonesia</span>
          </div>
        </div>
      </div>
    </div>

    <button class="logout-top-right" onclick="window.location.href='login.html';">
      <i class='bx bx-log-out'></i>
      Log out
    </button>

    <section class="Home_section">
      
    </section>

    
    <script src="script.js"></script>

    <!-- Tambahkan file JavaScript -->
    <script src="logout.js"></script>
  </body>
</html>