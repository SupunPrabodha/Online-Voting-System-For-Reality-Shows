<?php
session_start();

// Include the database connection file
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['First_Name'];
    $password = $_POST['Password'];

    // SQL query to retrieve user data based on username
    $sql = "SELECT * FROM voter_details WHERE voter_first_name = '$fname'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Error handling for SQL query
        echo "Error: " . mysqli_error($con);
        exit();
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Verify the password
        if ($password == $row['voter_password']) { // Assuming passwords are stored as plaintext for this example, ideally, they should be hashed
            // Password is correct, create session variables
            $_SESSION['First_Name'] = $fname;
            header("Location: home_page_logout.php");
            
        } else {
            // Password is incorrect
            echo "Invalid password";
            exit();
        }
    } else {
        // Username not found
        echo "User not found";
        exit();
    }
}

mysqli_close($conn);
?>