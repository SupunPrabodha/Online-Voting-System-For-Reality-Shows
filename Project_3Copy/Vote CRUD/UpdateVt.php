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
            <a  href="">About us</a>
            <a  href="../Admin_Account.html">Admin</a>
            <a class="active split" id="userID1" href="" style="background-color: darkblue;"><img src="../images/User_icon.png" style="height: 20px;" ></a>
            <a class="split" href="../login.html">Login</a>
            <a class="split" href="../register.html">Sign in</a>
        </div>

        <!--Header image-->

        <img src ="../images/header01.png" style="width:100%;">

        <!--UPDATE Reality Shows-->
        <?php   
         
            // Get  details from the URL parameter
            $show = $_POST["SelectShow"];
            $season = $_POST["SelectSeason"];
            $contestant = $_POST["Selectcontestant"];
   
            // Prepare the update query to update records in databse
            $sql = "UPDATE vote SET showName ='$show', season='$season', contestant='$contestant' WHERE showName='$show'";

            // Execute the update query
            $result = $conn->query($sql);

            // Check if the item exists in the database
            if ($result) 
            {
                echo "<h1><center>"."Vote Edited successfully"."</center></h1>";
                 
            } else {
                echo "Item not found in the database.";
            }

            // closing the connection
            $conn->close();

        
           
            //end of the  php file





        ?>




        
        <!--footer-->
        
        <footer >
            <div class="footer">

               <p class="Small-Text">
                   <a href="">Home</a><br><br>
                   <a href="">Vote</a><br><br>
                   <a href="">Watch</a><br><br>
                   <a href="">About Us</a><br><br>
                   <a href="">Login</a> | <a href="">Sign Up</a><br>
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