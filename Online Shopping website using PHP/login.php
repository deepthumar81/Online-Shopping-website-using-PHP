<?php
$servername = "localhost";
$username = "root";
$passwordD = "";
$db_name = "wp";
$conn = new mysqli($servername, $username, $passwordD, $db_name, 3360);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo " ";

if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE email_id = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1 && password_verify($password, $row['password'])) {
        header("Location: welcom.php");
    } else {
        echo  '<script>
                    window.location.href = "indexl.php";
                    alert("Login failed. Invalid username or password!!")
                </script>';
    }
}
