<?php
    include_once'config.php'
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
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/navigationbar2.css">
        <link rel="stylesheet" href="../css/AddRS.css">

        


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

        <ul>
            <li><a href="../Admin_Account.html">Admin Account</a></li>
            <li><a href="../Admin-ManageVote.html">Manage Vote</a></li>
            <li><a  href="../Admin-SetDeadline.html">Manage Deadline</a></li>
            <li><a  href="../Admin-ManageAccount.html">Manage Accounts</a></li>
            <li><a class="active2" href="../Admin-ManageRealityShow.html">Manage RealityShow</a></li>
            
        </ul>



            
            <?php
            
                //inserting form data into the table

                $name = $_POST["name"];
                $ID= $_POST["id"];
                $season = $_POST["season"];
                $episode = $_POST["episode"];
                

                //preparing the SQL statement 
                $sql = "INSERT INTO 
                        RealityShow (Rshow_ID,Rshow_name,Season_no,No_episodes)
                        VALUES('$ID','$name','$season','$episode')"; 
                
                //execute the SQL statement.check if a data related to query 'sql' to connection
                $result = $conn->query($sql);

                ///Check for errors
                if ($result) {
                    echo "<h1><center>"."New Reality Show Added successfully"."</center></h1>";
                    //display the data
                    echo"<br><center>";
                    echo "<h3>"."Reality Show Name: ".$name."</h3>";
                    echo "<h3>"."Reality Show ID: ".$ID."</h3>";
                    echo "<h3>"."Season Number: ".$season."</h3>";
                    echo "<h3>"."No of Episodes: ".$episode."</h3>";
                    echo"</center>";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                //close the connection
                $conn->close();

                
            ?>

            
        <!--end of CREATE-->

        <!--footer-->
        
        <footer >
            <div class="footer">

            <p class="Small-Text">
                    <a href="../home_page.html">Home</a><br><br>
                    <a href="../Vote_Page.html">Vote</a><br><br>
                    <a href="../watch_page.html">Watch</a><br><br>
                    <a href="../aboutUs.html">About Us</a><br><br>
                    <a href="../login.html">Login</a> | <a href="../register.html">Sign Up</a><br>
                </p>
            
            


               <P class="Large-Text">
                   VOTE SPHERE
               
               <div class="PageURL-Text">
                   WWW.VOTE SPHERE.COM
               </div>

               </P>

           </div>

       </footer>
       
    </body>
</html>