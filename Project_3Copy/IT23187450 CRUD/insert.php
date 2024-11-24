<?php

    include 'config.php';

    $firstName = $_POST['First_Name'];
    $lastName = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $phoneNumber = $_POST['Phone_Number'];
    $newPass = $_POST['New_Password'];
    $conPass = $_POST['Comfirm_Password'];

    
        $sql = "INSERT INTO voter_details( voter_first_name,voter_last_name, voter_email, voter_phone_number, voter_password) 
        VALUES ('$firstName','$lastName','$email','$phoneNumber','$newPass')";

        $result = $conn->query($sql);

        if($result){
            echo "Success";
            header("location:User_account_page.php");
        }
        else{
            echo "Something went wrong";
        }

    
?>