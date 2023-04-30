<!DOCTYPE html>
<html>
<head>
    <title>Redlock</title>
</head>
<body>
    <h1>Staff</h1>

    <?php
    $mysqli = new mysqli("172.23.0.2", "root", "root", "Redlock");
    // untuk membuat koneksi dengan database mysql
    
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    }
    // Untuk mengecek apakah koneksi error atau tidak
    
    
    $result = $mysqli->query("SELECT * FROM users");
    // query untuk mengambil data dari table users pada database

    
    while ($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row["ID"] . "<br>";
        echo "Nama: " . $row["Nama"] . "<br>";
        echo "Alamat: " . $row["Alamat"] . "<br>";
        echo "Jabatan: " . $row["Jabatan"] . "</p>";
    }
    // untuk menampilkan data di web yang diambil dari database 

    $mysqli->close(); // untuk menutup koneksi dengan database mysql
    ?>
</body>
</html>
