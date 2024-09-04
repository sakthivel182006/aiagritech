<?php
$servername = "localhost";
$dbUsername = "railway"; 
$dbPassword = "123456789"; 
$dbname = "verify"; 
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM customers WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login successful! Welcome, " . $email;
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
}

$conn->close();
?>
