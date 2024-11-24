<!DOCTYPE html>
<html lang="en">
    <head> 
            <link rel="stylesheet" href="../css/home.css">
            <link rel="stylesheet" href="../css/navigationBar.css">        
            <link rel="stylesheet" href="../css/text.css"> 
            <link rel="stylesheet" href="../css/button.css">
            <link rel="stylesheet" href="../css/footer.css">
            <link rel="stylesheet" href="../css/navigationbar2.css">
            <link rel="stylesheet" href="../css/register.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>   
            <title>
            VoteSphere | Registration Page
            </title>
    </head>

    <body>


        <div class="topnav">
            <a  id="logo1" href=""><img src = "../images/Logo1.png" style="height: 40px;" ></a>
            <a  href="../home_page.html">Home</a>
            <a  href="../Vote_Page.html">Vote</a>
            <a  href="../watch_page.html">Watch</a>
            <a  href="../popular_page.html">Popular</a>
            <a  href="">About us</a>
            <a  href="../Admin_Account.html">Admin</a>
            <a class="active split" id="userID1" href="" style="background-color: darkblue;"><img src="../images/User_icon.png" style="height: 20px;" ></a>
            <a class="active" href="login.php">Login</a>
            <a class="split" href="../register.html">Sign in</a>
        </div>


        <img src ="../images/header01.png" style="width:100%;">
        <section class="back">
            <div class="wrapper">
                <form action="log_insert.php" id="form" method="post">
                    <h1>Login</h1>
                    
                    <div class="input-box">
                        <label for="User Name" >User Name </label>
                        <input type="text" id="Fisrt Name" name="First_Name" placeholder="Username" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <label for="Password" >Password</label>
                        <input type="password" id="Password" name="Password" placeholder="Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                <center>   
                    <button type="submit" class="btn">Login</button>
                </center>    
                    <div class="register-link">
                        <p>Don't have an account ?<a href="register.php">Sign up</a></p>
                    </div>
                </form>
            </div>
        </section>
        <br><br>
    </body>
    <footer >

    
        <div class="footer">
            <br><br>

           <p class="Small-Text">
               <a href="../home_page.html">Home</a><br><br>
               <a href="../Vote_Page.html">Vote</a><br><br>
                <a href="../watch_page.html">Watch</a><br><br>
               <a href="">About Us</a><br><br>
               <a href="login.php">Login </a>|<a href="../register.html"> Sign Up</a><br>
           </p>
        
           <P class="Large-Text">
               VOTE SPHERE
           
           <div class="PageURL-Text">
               <a href="../home_page.html">WWW.VOTE SPHERE.COM</a><br><br>
           </div>
           </P>
       </div>
   </footer>
</html>
