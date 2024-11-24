<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM voter_details WHERE voter_id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("location:User_account_page.php");

    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
