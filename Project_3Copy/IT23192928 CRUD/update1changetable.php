<?php

require 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <title>
            Adding Reality Shows
        </title>

        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/navigationBar.css">        
        <link rel="stylesheet" href="../css/text.css">
        <link rel="stylesheet" href="../css/button.css">
        <link rel="stylesheet" href="../css/navigationbar2.css">
        <link rel="stylesheet" href="../css/deadline.css">
        
        

        


    </head>

    <body>
        <!--Navigation Bar1-->

        <div class="topnav">
            <a  id="logo1" href=""><img src = "../images/Logo1.png" style="height: 40px;" ></a>
            <a  href="../home_page.html">Home</a>
            <a  href="../Vote_Page.html">Vote</a>
            <a  href="../watch_page.html">Watch</a>
            <a  href="../popular_page.html">Popular</a>
            <a  href="../aboutUs.html">About us</a>
            <a  href="../Admin_Account.html">Admin</a>
            <a class="active split" id="userID1" href="" style="background-color: darkblue;"><img src="../images/User_icon.png" style="height: 20px;" ></a>
            <a class="split" href="../login.html">Login</a>
            <a class="split" href="../register.html">Sign in</a>
        </div>

        <!--Header image-->

        <img src ="../images/header01.png" style="width:100%;">


        <div class=" container1 container2" > 
                <ul>
                    <li><a href="../Admin_Account.html">Admin Account</a></li>
                    <li><a href="../Admin-ManageVote.html">Manage Vote</a></li>
                    <li><a class="active2" href="../Admin-SetDeadline.html">Manage Deadline</a></li>
                    <li><a  href="../Admin-ManageAccount.html">Manage Accounts</a></li>
                    <li><a href="../Admin-ManageRealityShow.html">Manage RealityShow</a></li>
                </ul>
         </div>    
            
                



                <div class="container1 mainContent1">
                <fieldset>


                    <?php
                    $dID = $_POST["deadlineID"];
                    $Realityshow = $_POST["realityshow_1"];
                    $Season = $_POST["season_1"];
                    $StartD = $_POST["startdate"];
                    $EndD = $_POST["enddate"];

                    if(empty($dID)||empty($Realityshow)||empty($Season)||empty($StartD)||empty($EndD))
                    {
                        echo "All required";
                    }
                    else
                    {


                        //change table name here
                        $sql="UPDATE setdeadline
                        SET realityShowName='$Realityshow',season ='$Season',startDate='$StartD',endDate='$EndD'
                        Where deadline_ID='$dID'";

                        if($conn->query($sql))
                        {
                            
                            echo "<h1><center>"."Updated Successful"."</center></h1>";
                                //display the data
                            echo"<br><center>";
                            echo "<h3>"."ID : ".$dID."</h3>";
                            echo "<h3>"."Reality Show Name: ".$Realityshow."</h3>";
                            echo "<h3>"."Season: ".$Season."</h3>";
                            echo "<h3>"."Start Date: ".$StartD."</h3>";
                            echo "<h3>"."End Date: ".$EndD."</h3>";
                            echo"</center>";
                        }
                        else
                        {
                            echo "Not Updated";
                        }
                    }
                    
                    ?>
                </fieldset>
                </div>


       
    </body>
</html>