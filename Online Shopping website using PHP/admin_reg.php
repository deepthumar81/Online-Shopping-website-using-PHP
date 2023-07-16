<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input data
    $errors = array();

    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    // If there are no validation errors, proceed with registration
    if (count($errors) == 0) {
        // Connect to the database
        $host = 'localhost';
        $user = 'root';
        $passwordD = '';
        $database = 'wp';
        $conn = mysqli_connect($host, $user, $passwordD, $database, 3360);

        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert admin record into the database
        $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$hashedPassword')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registration successful.');</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "');</script>";
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        // Display validation errors as alerts
        $errorString = "";
        foreach ($errors as $error) {
            $errorString .= $error . "\\n";
        }
        echo "<script>alert('" . $errorString . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Registration</title>
</head>

<body>
    <h1>Admin Registration</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="username">Username (Email):</label>
            <input type="email" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</body>

</html>