
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

         <!--link css-->
        
        <link rel="stylesheet" href="../css/navigationBar.css">        
        <link rel="stylesheet" href="../css/text.css">
        <link rel="stylesheet" href="../css/button.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/navigationbar2.css">
        <link rel="stylesheet" href="../css/deadline.css">
        <link rel="stylesheet" href="../css/home.css">
        


    </head>

    <body>
        <!--Navigation Bar1-->

        <div class="topnav">
            <a  id="logo1" href=""><img src = "../images/Logo1.png" style="height: 40px;" ></a>
            <a  href="../home_page.html">Home</a>
            <a  href="../Vote_Page.html">Vote</a>
            <a  href="../watch_page.html">Watch</a>
            <a  href="../popular_page.html">Popular</a>
            <a  href="">About us</a>
            <a  href="../Admin_Account.html">Admin</a>
            <a class="active split" id="userID1" href="" style="background-color: darkblue;"><img src="../images/User_icon.png" style="height: 20px;" ></a>
            <a class="split" href="../login.html">Login</a>
            <a class="split" href="../register.html">Sign in</a>
        </div>

        <!--Header image-->

        <img src ="../images/header01.png" style="width:100%;">

        
             <!--Navigation bar 2-->
             
             <ul>
                <li><a href="../Admin_Account.html">Admin Account</a></li>
                <li><a href="../Admin-ManageVote.html">Manage Vote</a></li>
                <li><a class="active2" href="../Admin-SetDeadline.html">Manage Deadline</a></li>
                <li><a  href="../Admin-ManageAccount.html">Manage Accounts</a></li>
                <li><a href="../Admin-ManageRealityShow.html">Manage RealityShow</a></li>
                
            </ul>    
            
                



                <div class="container1 mainContent1">


                <!--Set Deadline form-->


                <fieldset >



                <?php
                $RealShowName = $_POST["realityshow_1"];
                $RealShowSeason = $_POST["season_1"];
                $startD = $_POST["startdate"];
                $endD = $_POST["enddate"];

                $sql = "INSERT INTO setdeadline VALUES('','$RealShowName','$RealShowSeason','$startD','$endD')";


                if($conn->query($sql))
                {
                    echo "<h1><center>"."Insert Successful"."</center></h1>";
                    //display the data
                echo"<br><center>";
                echo "<h3>"."Reality Show Name: ".$RealShowName."</h3>";
                echo "<h3>"."Season: ".$RealShowSeason."</h3>";
                echo "<h3>"."Start Date: ".$startD."</h3>";
                echo "<h3>"."End Date: ".$endD."</h3>";
                echo"</center>";
                }
                else{

                    echo "Error : ".$conn->error;
                }

                $conn->close();

                



                ?>


                </fieldset>
                </div>

       
    </body>
</html>