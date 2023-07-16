<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define variables to store the form inputs
$name = $category = $description = $price = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data and sanitize it
    $name = sanitize_input($_POST["name"]);
    $category = sanitize_input($_POST["category"]);
    $description = sanitize_input($_POST["description"]);
    $price = sanitize_input($_POST["price"]);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO products (name, category, description, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $name, $category, $description, $price);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Function to sanitize the form inputs
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
</head>

<body>
    <h2>Add Product</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="category">Category:</label>
        <input type="text" name="category" required><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" rows="4" cols="50"></textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br><br>

        <input type="submit" value="Add Product">
    </form>
</body>

</html>