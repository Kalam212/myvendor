<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "myvendor");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Vendor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .register-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .register-container h1 {
            margin-bottom: 20px;
        }
        .register-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .register-container button:hover {
            background: #218838;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            text-align: center;
            margin-bottom: 10px;
        }
        .logo {
            width: 80px; /* Adjust logo size */
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Add the logo here -->
        <img src="img/acount.png" alt="Vendor Logo" class="logo">
        <h1>Register Vendor</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $conn->real_escape_string($_POST['username']);
            $password = $conn->real_escape_string($_POST['password']);

            $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'vendor')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='success'>Registrasi berhasil. Silakan <a href='login.php'>login</a>.</div>";
            } else {
                echo "<div class='error'>Registrasi gagal: " . $conn->error . "</div>";
            }
        }
        ?>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
