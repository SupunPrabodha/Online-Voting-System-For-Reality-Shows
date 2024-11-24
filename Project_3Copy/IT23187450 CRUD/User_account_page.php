<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navigationBar.css">        
    <link rel="stylesheet" href="css/text.css"> 
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navigationbar2.css">
    <link rel="stylesheet" href="css/userprof.css">
    <link rel="stylesheet" href="css/table.css"> <!-- Added link for table styling -->
    <link rel="stylesheet" href="css/Acc_update.css"> <!-- Added link for update form styling -->
    <title>VoteSphere | User profile Page</title>
</head>
<body>
    <div class="topnav">
        <a id="logo1" href=""><img src="images/Logo1.png" style="height: 40px;"></a>
        <a href="home_page.php">Home</a>
        <a href="">Vote</a>
        <a href="">Watch</a>
        <a href="">Popular</a>
        <a href="">About us</a>
        <a class="split" id="userID1" href="User_account_page.php"><img src="images/User_icon.png" style="height: 20px;"></a>
        <a class="split" href="login.php">Login</a>
        <a class="split" href="register.php">Sign in</a>
    </div>
    <div class="active">
        <img src="images/header01.png" style="width:100%;">
    </div>
    
    <div class="user-details">
        <h1>User Profiles</h1>
        <?php
        require 'config.php';
        
        $sql = "SELECT voter_id, voter_first_name, voter_last_name, voter_email, voter_phone_number, voter_password FROM voter_details";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Password</th><th>Action</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["voter_id"]."</td><td>".$row["voter_first_name"]."</td><td>".$row["voter_last_name"]."</td><td>".$row["voter_email"]."</td><td>".$row["voter_phone_number"]."</td><td>".$row["voter_password"]."</td>";
                echo "<td>";
                echo "<form action='update_details.php' method='post'><input type='submit' name='update' value='Update'></form>";
                echo "<form action='Acc_dlt.php' method='post' onsubmit='return confirmDelete();'><input type='hidden' name='id' value='".$row["voter_id"]."'><input type='submit' name='delete' value='Delete'></form>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No Results";
        }
        
        $conn->close();
        ?>
    </div>
    
    <script src="deleteConfirmation.js"></script> <!-- Linking the separate JavaScript file -->
</body>

<footer>
    <div class="footer">
        <br><br>

        <p class="Small-Text">
            <a href="home_page.html">Home</a><br><br>
            <a href="">Vote</a><br><br>
            <a href="">Watch</a><br><br>
            <a href="">About Us</a><br><br>
            <a href="login.php">Login </a>|<a href="register.html"> Sign Up</a><br>
           </p>
        
           <P class="Large-Text">
               VOTE SPHERE
           
           <div class="PageURL-Text">
               <a href="home_page.html">WWW.VOTE SPHERE.COM</a><br><br>
           </div>
           </P>
       </div>
   </footer>
</html>
