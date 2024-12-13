<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Logistik</title>

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
            <a href="practice.html">
              <i class='bx bx-smile'></i>
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
          <a href="login.php">
            <i class='bx bx-user' ></i>
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

  <section class="Home_section">
    <div class="text">Selamat Datang Di MyVendor PLN UBP Keramasan "</div>
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
</body>
</html>