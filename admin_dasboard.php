<?php
include 'koneksi/koneksi.php';

// Query SQL untuk mengambil jumlah pengguna, vendor, admin, dan logistik
$sqlUsers = "SELECT COUNT(*) AS totalUsers FROM users";
$sqlVendors = "SELECT COUNT(*) AS totalVendors FROM users WHERE role = 'vendor'";
$sqlAdmins = "SELECT COUNT(*) AS totalAdmins FROM users WHERE role = 'admin'";
$sqlLogistics = "SELECT COUNT(*) AS totalLogistics FROM users WHERE role = 'logistik'";

// Eksekusi query
$resultUsers = $conn->query($sqlUsers);
$resultVendors = $conn->query($sqlVendors);
$resultAdmins = $conn->query($sqlAdmins);
$resultLogistics = $conn->query($sqlLogistics);

// Ambil hasil
$totalUsers = $resultUsers->fetch_assoc()['totalUsers'];
$totalVendors = $resultVendors->fetch_assoc()['totalVendors'];
$totalAdmins = $resultAdmins->fetch_assoc()['totalAdmins'];
$totalLogistics = $resultLogistics->fetch_assoc()['totalLogistics'];

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
        <div class="logo_text">PLN <br>Asu Power</div>
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
            <a href="berita_acara.php">
              <i class='bx bx-book'></i>
              <span class="links_name">Buat Berita Acara</span>
            
              <span class="tooltip">Buat Berita Acara</span>
            </a>
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
      <div class="text">Selamat Datang Di MyVendor PLN UBP Keramasan</div>
      <!-- Dashboard Cards -->
      <div class="dashboard-cards">
        <!-- Card for Total Users -->
        <div class="card">
          <div class="card-header">
            <h3>Total Users</h3>
          </div>
          <div class="card-body">
            <p>Jumlah pengguna yang terdaftar: <?php echo $totalUsers; ?></p>
          </div>
        </div>

        <!-- Card for Total Vendors -->
        <div class="card">
          <div class="card-header">
            <h3>Total Vendors</h3>
          </div>
          <div class="card-body">
            <p>Jumlah vendor yang terdaftar: <?php echo $totalVendors; ?></p>
          </div>
        </div>

        <!-- Card for Total Admins -->
        <div class="card">
          <div class="card-header">
            <h3>Total Admins</h3>
          </div>
          <div class="card-body">
            <p>Jumlah admin yang terdaftar: <?php echo $totalAdmins; ?></p>
          </div>
        </div>

        <!-- Card for Total Logistik -->
        <div class="card">
          <div class="card-header">
            <h3>Total Logistik</h3>
          </div>
          <div class="card-body">
            <p>Jumlah logistik yang terdaftar: <?php echo $totalLogistics; ?></p>
          </div>
        </div>

      </div>
    </section>

    <script>
      const sidebar = document.querySelector(".sidebar");
      const btn = document.querySelector("#btn");
      const logo_img = document.querySelector("#logo_img");

      logo_img.onclick = function(){
        if (!x.matches){
          sidebar.classList.toggle('open');
        }
      }
      btn.onclick = function(){
        if (!x.matches){
          sidebar.classList.remove('open');
        }
      }

      function myFunction(x) {
        if (x.matches) {
          sidebar.classList.remove('open');
        } 
      }

      var x = window.matchMedia("(max-width: 700px)")
      myFunction(x);
      x.addListener(myFunction);
    </script>

    <!-- Tambahkan file JavaScript -->
    <script src="logout.js"></script>
  </body>
</html>