  
<?php

$errors = array(); // Initialize an array to store any validation errors

if (isset($_POST['submit'])) {

  $name = $_POST['name'];

  if (empty($name)) {
    $errors['name'] = "Name is required"; // Store an error message for the name field
  }

  $email = $_POST['email'];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format"; // Store an error message for the email field
  }

  $contactNo = $_POST['contactNo'];

  if (empty($contactNo) || !is_numeric($contactNo)) {
    $errors['contactNo'] = "Contact number is required and must be numeric"; // Store an error message for the contactNo field
  }

  $message = $_POST['message'];

  if (empty($message)) {
    $errors['message'] = "Message is required"; // Store an error message for the message field
  }

  if (empty($errors)) {
    // If there are no errors, process the form data (e.g., send an email, save to a database, etc.)
    // Add your code here

    // Redirect the user to a success page
    header("Location: success.php");
    exit;
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="t.css">
  <script src="t.js"></script>


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Abel&family=Caveat:wght@500;600&family=Shadows+Into+Light&display=swap');
  </style>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">

</head>

<body>
  <header>
    <div>
      <div class="bg"></div>
      <div class="bg bg2"></div>
      <div class="bg bg3"></div>

      <section class="nav">
        <!-- We can also insert any logo here     -->
        <div class="logo" onclick="window.location.href='Index.html'">Bottlio</div>

        <!--  checkbox to control the icon's state    -->
        <input id="menu-toggle" type="checkbox" />
        <label class="menu-button-container" for="menu-toggle">
          <div class="menu-button"></div>
        </label>
        <!--  main menu    -->
        <ul class="menu">

          <li onclick="window.location.href='shop.html'">Shop</li>
          <li onclick="window.location.href='about.html'">About</li>
          <li class="active" onclick="window.location.href='contact.html'">Contact</li>
        </ul>
      </section>
    </div>

      


 
</header>

<div class="background">
    <div class="containe">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-left">
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>
        <div class="screen-body">
        <div class="screen-body-item">
            <div class="app-form">
            <form action="contact.php" method="POST">
  <div class="app-form-group">
    <input class="app-form-control" type="text" name="name" placeholder="NAME">
    <?php if (!empty($errors['name'])) : ?>
      <span class="error"><?php echo $errors['name']; ?></span>
    <?php endif; ?>
  </div>
  <div class="app-form-group">
    <input class="app-form-control" type="email" name="email" placeholder="EMAIL">
    <?php if (!empty($errors['email'])) : ?>
      <span class="error"><?php echo $errors['email']; ?></span>
    <?php endif; ?>
  </div>
  <div class="app-form-group">
    <input class="app-form-control" type="tel" name="contactNo" placeholder="CONTACT NO">
    <?php if (!empty($errors['contactNo'])) : ?>
      <span class="error"><?php echo $errors['contactNo']; ?></span>
    <?php endif; ?>
  </div>
  <div class="app-form-group message">
    <textarea class="app-form-control" name="message" placeholder="MESSAGE"></textarea>
    <?php if (!empty($errors['message'])) : ?>
      <span class="error"><?php echo $errors['message']; ?></span>
    <?php endif; ?>
  </div>
  <div class="app-form-group buttons">
    <button type="reset" class="app-form-button">CANCEL</button>
    <button type="submit" name="submit" class="app-form-button">SEND</button>
  </div>
</form>

            </div>
        </div>

        </div>
      </div>
      
    </div>
  </div>
  

<div class="rresponsive">
  <div class="loop-wrapper">
    <div class="mountain"></div>
    <div class="hill"></div>
    <div class="tree"></div>
    <div class="tree"></div>
    <div class="tree"></div>
    <div class="rock"></div>
    <div class="truck"></div>
    <div class="wheels"></div>
  </div> 
</div>


 <footer>
      <div class="container">
        <div class="footer-content">
          <div class="logo">
            Bottlio
          </div>
          <div class="footer-links">
            
              <a href="About.html">About us</a> 
              <a href="contact.php">Contact us</a><br>
              <a href="#">Career</a><br>
              <a href="#">Store locater</a><br>
              <a href="#">privacy policy</a><br>
              <a href="#">terms and condition</a><br>
              
            
            
          </div>
          <div class="footer-address">
            <p>912 space , mira road [E]</p>
            <p>Phone: +91 9541258745</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30128.037052952604!2d72.85589396044321!3d19.282164790935457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0458cf7298b%3A0x468ed839e9df2b21!2sMira%20Road%20East%2C%20Mira%20Bhayandar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1687503916610!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen></iframe>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2023 Your Bottle Company. All rights reserved.</p>
        </div>
      </div>
    </footer>
</body>

</html>
