<?php
    session_start();
    include "includes/function.php";

    $UserId = CheckLogin();
    $UserInfo = GetAllUserInfo($UserId);
    $LastName = $UserInfo['last_name'];
    $FirstName = $UserInfo['first_name'];
    $Email = $UserInfo['email'];
    $HouseNum = $UserInfo['house_num'];
    $Barangay = $UserInfo['barangay'];
    $Phone = $UserInfo['phone_num'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pasada</title>
    <!-- StyleSheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/home.css" />
  </head>

  <body>
    <!-- HEADER SECTION STARTS HERE -->
      <header class="header">
          <a href="index.html" class="logo"><i class="fas fa-route"></i>Pasada</a>

          <nav class="navbar">
              <a class="active" href="home.html">Home</a>
              <a href="#">Restaurants</a>
              <a href="#">About Us</a>
          </nav>

          <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <a href="myBag.html" class="fas fa-shopping-bag"></a>
            <div class="fas fa-user" id="user-btn"></div>
          </div>

          <nav class="user_settings">
            <a href="user.php">My Profile</a>
            <a href="myOrders.html">My Orders</a>
            <a href="logout.php">Log Out</a>
          </nav>
      </header>
      <!-- HEADER SECTION ENDS HERE -->

      <!-- HOME PAGE CONTENT STARTS HERE -->
      <section class="home-section1">
        <div class="content">
          <h1>Hi <?php echo "$FirstName";?>, What would you like to order today?</h1>
          <p>
            Browse our featured food items today or check the available restaurants here in San Fernando, La Union!
          </p>
          <a href="#" class="ordernow-btn">ORDER NOW</a>
        </div>
        <img src="images/hellouser.svg" alt="delivery">
      </section>

      <section class="home-section2">
        <div class="upper">
          <h1>our featured food items</h1>
        </div>
        <div class="lower">
          <div class="box">
          </div>
        </div>
      </section>
      <!-- HOME PAGE CONTENT STARTS HERE -->

      <!-- FOOTER SECTION STARTS HERE -->
      <footer class="footer">
        <div class="upper">
          <div class="content">
            <a href="index.html" class="logo"><i class="fas fa-route"></i>Pasada</a>
          </div>

          <div class="links">
            <div class="link">
              <h4>Contact Information</h4>
              <div>
                <i class="fas fa-map-marked-alt"></i>
                <span>Address</span>
              </div>
              <div>
                <i class="fas fa-envelope"></i>
                <span>pasada_official@gmail.com</span>
              </div>
              <div>
                <i class="fas fa-phone-alt"></i>
                <span>09056632987</span>
              </div>
            </div>

            <div class="link">
              <h4>Quick Links</h4>
              <a href="#">Features</a>
              <a href="#">Become a Partner</a>
              <a href="#">Become a Rider</a>
            </div>

            <div class="link">
              <h4>Connect with Us</h4>
              <div>
                <i class="fab fa-facebook"></i>
                <span>Facebook</span>
              </div>
              <div>
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
              </div>
              <div>
                <i class="fab fa-twitter"></i>
                <span>Twitter</span>
              </div>
            </div>
          </div>
        </div>

        <div class="lower">
          <p>© 2021 Pasada. Food Ordering and Delivery Company. All Rights Reserved.</p>
        </div>
      </footer>
      <!-- FOOTER SECTION ENDS HERE -->

    <!-- Scripts -->
    <script src="js/main.js"></script>
  </body>
</html>
