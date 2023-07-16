<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['username'];
    $lastname = $_POST['username2'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $confirmPassword = $_POST['confirm'];
    $dob = $_POST['date'];

    $errors = array();

    if (empty($firstname)) {
        $errors[] = "First name is required.";
    }

    if (empty($lastname)) {
        $errors[] = "Last name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    if ($password != $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($dob)) {
        $errors[] = "Date of birth is required.";
    }

    if (count($errors) == 0) {
        $host = 'localhost';
        $user = 'root';
        $passwordD = '';
        $database = 'wp';
        $conn = mysqli_connect($host, $user, $passwordD, $database, 3360);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $existingEmailCheck = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $existingEmailCheck);

        if ($result) {
            $count = mysqli_num_rows($result);

            if ($count > 0) {
                $errors[] = "Email already exists. Please choose a different email.";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users (first_name, last_name, email, password, dob) VALUES ('$firstname', '$lastname', '$email', '$hashedPassword', '$dob')";

                if (mysqli_query($conn, $sql)) {
                    header("Location: welcom.php");
                    exit();
                } else {
                    echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "');</script>";
                }
            }
        } else {
            $errors[] = "Error checking existing email: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    if (count($errors) > 0) {
        $errorString = "";
        foreach ($errors as $error) {
            $errorString .= $error . "\\n";
        }
        echo "<script>alert('" . $errorString . "'); window.location.href = 'indexr.php';</script>";
    }
}
