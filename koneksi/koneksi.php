// Database connection
$servername = "localhost"; // Nama server database Anda
$username = "root";        // Username database Anda
$password = "";            // Password database Anda
$dbname = "myvendor"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}