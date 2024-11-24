<!DOCTYPE html>
<html lang="en">
    <head> 
            <link rel="stylesheet" href="css/home.css">
            <link rel="stylesheet" href="css/navigationBar.css">        
            <link rel="stylesheet" href="css/text.css"> 
            <link rel="stylesheet" href="css/button.css">
            <link rel="stylesheet" href="css/footer.css">
            <link rel="stylesheet" href="css/navigationbar2.css">
            <link rel="stylesheet" href="css/register.css">
            <script src="/IT23187450 CRUD/register.js" defer></script>
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>
            VoteSphere | Registration Page
        </title>
    </head>

    <body>


        <div class="topnav">
        <a  id="logo1" href=""><img src = "images/Logo1.png" style="height: 40px;" ></a>
                <a  href="home_page.html">Home</a>
                <a  href="Vote_Page.html">Vote</a>
                <a  href="watch_page.html">Watch</a>
                <a  href="popular_page.html">Popular</a>
                <a  href="">About us</a>
                <a  href="Admin_Account.html">Admin</a>
                <a class="split" id="userID1" href="User_account_page.html"><img src="images/User_icon.png" style="height: 20px;" ></a>
                <a class="split" href="login.html">Login</a>
            <a class="active" href="register.php">Sign in</a>
        </div>


        <img src ="images/header01.png" style="width:100%;">
        <section class="back">
            <div class="wrapper">

                <form method="post" action="IT23187450 CRUD/insert.php" id="registration-form" onsubmit="return validateForm()">
                    <h1>Create Your Account</h1>
                    <div class="input-box">
                        <label for="First Name" >First Name </label>
                        <input type="text" id="First Name" name="First_Name" placeholder="First Name" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <label for="Last Name" >Last Name </label>
                        <input type="text" id="Last Name" name="Last_Name" placeholder="Last Name" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <label for="Email" >Email </label>
                        <input type="email" id="Email" name="Email" placeholder="Email" required>
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="input-box">
                        <label for="Phone Number" >Phone Number </label>
                        <input type="tel" id="Phone Number" name="Phone_Number" placeholder="Phone Number" required>
                        <i class='bx bxs-phone'></i>
                    </div>
                    <div class="input-box">
                        <label for="New Password" >Password</label>
                        <input type="password" id="New Password" name="New_Password" placeholder="New Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                    <div class="input-box">
                        <label for="Comfirm Password" >Comfirm Password</label>
                        <input type="password" id="Comfirm Password" name="Comfirm_Password" placeholder="Comfirm Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                <center>
                    <button type="submit" class="btn">Create New Account</button>
                    <form action="" id="registration-form" onsubmit="return validateForm()">
                    </form>
                    
                </center>
                    <div class="register-link">
                        <p>Already have an account ?<a href="IT23187450 CRUD/login.php">Log in</a></p>
                    </div>
                </form>
            </div>
        </section>
    <br><br>
    </body>


    <footer >

    
        <div class="footer">
           <p class="Small-Text">
           <a href="home_page.html">Home</a><br><br>
            <a href="Vote_Page.html">Vote</a><br><br>
            <a href="watch_page.html">Watch</a><br><br>
            <a href="">About Us</a><br><br>
            <a href="IT23187450 CRUD/login.php">Login </a>|<a href="register.php"> Sign Up</a><br>
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
