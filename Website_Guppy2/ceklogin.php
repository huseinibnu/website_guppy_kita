<?php
session_start();
include 'config.php';

// Assuming your table is named 'user' and you have a proper database connection
$username = $_POST['username'];
$password = md5($_POST['password']);

try {
    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM \"user\" WHERE username=:username AND password=:password";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Fetch data from the result
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists
    if ($data) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        header('location:dashboard.php');
    } else {
        echo '<p align="center">Login Gagal</p>';
        echo '<meta http-equiv="refresh" content="2;url=login.php">';
    }
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}

// Close the connection (not necessary for PDO)
// $con = null;
?>
