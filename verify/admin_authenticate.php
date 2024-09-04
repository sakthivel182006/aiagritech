<?php
$predefined_email = "sakthivelv202222@gmail.com";
$predefined_password = "sakthi@936";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $auth_email = $_POST['auth_email'];
    $auth_password = $_POST['auth_password'];

    if ($auth_email === $predefined_email && $auth_password === $predefined_password) {
        header("Location: admin_register.html");
        exit();
    } else {
        echo "Invalid authentication credentials.";
    }
}
?>
