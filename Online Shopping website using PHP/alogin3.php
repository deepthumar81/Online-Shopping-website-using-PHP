<?php
$servername = "localhost";
$username = "root";
$passwordD = "";
$db_name = "wp";
$conn = new mysqli($servername, $username, $passwordD, $db_name, 3360);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Verify the password
        $hashedPassword = $row['password'];
        if (password_verify($password, $hashedPassword)) {
            header("Location: welcom.php");
            exit();
        } else {
            echo '<script>
                    window.location.href = "index_al.php";
                    alert("Login failed. Invalid username or password!!");
                </script>';
        }
    } else {
        echo '<script>
                window.location.href = "index_al.php";
                alert("Login failed. Invalid username or password!!");
            </script>';
    }
}
