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
    <link rel="stylesheet" href="css/loginregisterstyle.css" />
  </head>

  <body>
    <!-- HEADER SECTION STARTS HERE -->
      <header class="header">
          <a href="index.html" class="logo"><i class="fas fa-route"></i>Pasada</a>

          <nav class="navbar">
              <a href="home.php">Home</a>
              <a href="#">Restaurants</a>
              <a href="#">About Us</a>
          </nav>

          <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <a href="myBag.html" class="fas fa-shopping-bag"></a>
            <div class="fas fa-user active" id="user-btn"></div>
          </div>

          <nav class="user_settings">
            <a href="user.php">My Profile</a>
            <a href="myOrders.html">My Orders</a>
            <a href="logout.php">Log Out</a>
          </nav>
      </header>
      <!-- HEADER SECTION ENDS HERE -->

      <!-- HOME PAGE CONTENT STARTS HERE -->
      <section class="signup-section">
        <div class="left">
          <img src="images/editprofile.svg">
        </div>
        <div class="right">
          <div class="signup-form">
            <h1>My Profile</h1>
            <form action="updateuser.php" method="post">
                <input type="text" id="" name="lastName" value="<?php echo $LastName;?>" required> 
                <input type="text" id="" name="firstName" value="<?php echo "$FirstName";?>" required>
                <input type="email" id="" name="email" value="<?php echo "$Email";?>" required>
                <input type="text" id="houseNum" name="houseNum" value="<?php echo "$HouseNum";?>"required>
                <input type="text" id="barangay" name="barangay" value="<?php echo "$Barangay";?>" required>
                <input type="text" id="" name="phoneNum" value="<?php echo "$Phone";?>" required>
                <input type="password" id="pw" name="password" placeholder="Password" required>
                <input type="password" id="pw" name="repeatpass" placeholder="Confirm Password"required>
              <input type="submit" name="submit" value="SAVE CHANGES">
            </form>
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