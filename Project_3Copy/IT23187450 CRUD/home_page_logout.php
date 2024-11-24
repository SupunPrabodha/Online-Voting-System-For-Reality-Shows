<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/navigationBar.css">
    <link rel="stylesheet" href="../css/text.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>VoteSphere | Home Page</title>
</head>

<body>
    <!-- Navigation Bar -->
    <div class="topnav">
    <a  id="logo1" href=""><img src = "../images/Logo1.png" style="height: 40px;" ></a>
            <a  href="../home_page.html">Home</a>
            <a  href="../Vote_Page.html">Vote</a>
            <a  href="../watch_page.html">Watch</a>
            <a  href="../popular_page.html">Popular</a>
            <a  href="">About us</a>
            <a  href="../Admin_Account.html">Admin</a>
            <a class="active split" id="userID1" href="" style="background-color: darkblue;"><img src="../images/User_icon.png" style="height: 20px;" ></a>
            <a class="split" href="logout.php">Logout</a>
    </div>

    <!-- Header Image -->
    <img src="../images/header01.png" style="width:100%;">

    <!-- Main Content Sections -->
    <div class="row">
        <div class="column left">
            <img src="../images/1.png" class="img1">
        </div>
        <div class="column middle">
            <p class="p2">Watch your favourite reality tv shows and vote for the idol of your choice.</p>
            <button class="button1" onclick="redirectToAboutUs()">About Us</button>
        </div>
        <div class="column right">
            <img src="../images/3.png" class="img1">
        </div>
    </div>

    <!-- Reality Shows Section -->
    <!-- Your reality shows content here -->

    <!-- Winners Section -->
    <!-- Your winners content here -->

    <script src="homePage.js"></script> <!-- Linking the separate JavaScript file -->
</body>

<footer>
    <!-- Footer Content -->
    <div class="footer">
        <br><br>

        <p class="Small-Text">
        <a href="../home_page.html">Home</a><br><br>
                    <a href="../Vote_Page.html">Vote</a><br><br>
                    <a href="../watch_page.html">Watch</a><br><br>
                    <a href="">About Us</a><br><br>
                    <a href=<a href="login.php">Login</a> | <a href="register.php">Sign Up</a><br>
        </p>

        <p class="Large-Text">
            VOTE SPHERE
            <div class="PageURL-Text">
                <a href="../home_page.html">WWW.VOTE SPHERE.COM</a><br><br>
            </div>
        </p>
    </div>
</footer>

</html>
