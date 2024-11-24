<!---link the php file to manage vote page in admin
->
<?php
    include_once 'config.php'
?>

<!Doctype html>
<html>
    
<head>
     <!--link home.css-->

     <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/navigationBar.css">        
        <link rel="stylesheet" href="../css/text.css">
        <link rel="stylesheet" href="../css/button.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/navigationbar2.css">
        

        

        <!--title-->

        <title>
            VoteSphere-Admin-SetDeadline Page
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
                <li><a href="../Admin-SetDeadline.html">Manage Deadline</a></li>
                <li><a href="../Admin-ManageAccount.html">Manage Account</a></li>
                <li><a href="../Admin-ManageRealityShow.html" class="active2">Manage RealityShow</a></li>
            </ul>


            <!--ManageRealityShows form-->
            <div class="container1">
                <form>

                    <h1><center>
                        Reality Shows
                    </center></h1><br>

    
                <!--REALITY SHOW TABLE -->
                <div class="RS tbl">
                    <center>
                    <table border="1" width="50%" style= "border-color: seashell">
                        <tr>
                            <th class="col1">Vote ID</th>
                            <th class="col1">voted Reality Show Name</th>
                            <th class="col1">selected Season</th>
                            <th class="col1">Voted Contestant</th>
                            
                        </tr>

                <?php
                                                        
                    $sql = "SELECT vote_ID,showName,season,contestant FROM Vote";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr> <td>". $row["vote_ID"]."</td>";
                             echo "<td>". $row["showName"]."</td>";
                             echo "<td>". $row["season"]."</td>";
                             echo "<td>". $row["contestant"]."</td>";
                        echo "</tr>";

                    }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                    
                ?>
                        
                    </center>
                    </table>
                </div>
                    
                <!--END OF THE REALITY SHOW TABLE-->
                    
                </form>
            </div>


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