<?php
// Connect to MySQL
$conn = mysqli_connect('localhost', 'root', 'root', 'Website_data');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['sb'])) {
    $name = mysqli_real_escape_string($conn, $_POST['person']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['text']);

    // 🔁 Replace 'web' with your actual table name
    $query = "INSERT INTO web (name, Email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $query)) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>