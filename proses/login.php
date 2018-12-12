<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpgames";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "select * from user where email='$email' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $_SESSION['id_user'] = $row['id_user'];

		header('Location: ../');
    }
} else {
    header('Location: ../login.php?error=1');
}
$conn->close();
?>