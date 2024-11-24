<?php

//connect config.php file
require 'config.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

     <!--link home.css-->
        

        <link rel="stylesheet" href="../css/navigationBar.css">        
        <link rel="stylesheet" href="../css/text.css">
        <link rel="stylesheet" href="../css/button.css">
        <link rel="stylesheet" href="../css/navigationbar2.css">
        <link rel="stylesheet" href="../css/deadline.css">
        <link rel="stylesheet" href="../css/home.css">


        <!--title-->

        <title>
            VoteSphere-Admin-Read Deadline Page
        </title>

</head>

<body>

 <!--section 1-->


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

            
        <!--Navigation bar 2-->
             
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

                    <h1>Read Deadline</h1><br>

                        <table border = '1'>
                        <tr>
                            <th>Deadline_ID</th>
                            <th>RealityShow_Name</th>
                            <th>Season</th>
                            <th>StartDate</th>
                            <th>EndDate</th>
                        </tr>


                    
                        <?php



                            //Select query

                            $sql = "SELECT deadline_ID,realityShowName,season,startDate,endDate
                            FROM setdeadline";

                            $result = $conn->query($sql);



                            if($result->num_rows > 0)   //check the number of rows
                            {

                                while($row=$result->fetch_assoc())   //to divid the result in to rows
                                {
                                    echo "<tr>";
                                    echo "<td>".$row["deadline_ID"]."</td>";
                                    echo "<td>".$row["realityShowName"]."</td>";
                                    echo "<td>".$row["season"]."</td>";
                                    echo "<td>".$row["startDate"]."</td>";
                                    echo "<td>".$row["endDate"]."</td>";
                                    echo "</tr>";
                                }

                                echo "</table>";

                            }     


                            else
                            {
                                echo "No results";
                            }

                            ?>

                </fieldset>
                </div>
        </div>
 

       
    </body>
</html>




</html>











