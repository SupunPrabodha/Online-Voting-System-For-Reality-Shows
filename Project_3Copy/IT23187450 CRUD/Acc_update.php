<?php
require 'config.php';


    $id = $_POST['Voter_ID'];
    $first_name = $_POST['First_Name'];
    $last_name = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $phone_number = $_POST['Phone_Number'];
    $password = $_POST['Comfirm_Password'];

    if(empty($id))
    {
        echo "ID is not entered.";
    }
    else{
        $sql = "UPDATE voter_details 
                SET voter_first_name='$first_name', voter_last_name='$last_name', voter_email='$email', voter_phone_number='$phone_number', voter_password='$password' 
                WHERE voter_id='$id'";
    }

    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }


$conn->close();
?>
