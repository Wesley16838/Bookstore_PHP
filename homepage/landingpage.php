<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WESLEY's Bookstore</title>
    <meta name="description" content="WESLEY's Bookstore">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- link to external CSS file -->
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <!-- Content of the page goes here. -->
    <header>
        <div id="navbar">
            <div id="menu"><span id="button">Menu</span></div>
            <ul>    
                <li class="fadein" style="float:left">
                    <a href=""><img src="Artboard2.png" style="width:250px; margin-left: 0;"></a>
                </li>
                <li><button onclick="document.getElementById('id01').style.display='block'" class="btn blue fadein" style="padding: 10px 20px 10px 20px;">Login</button></li>
            </ul>
        </div>
    </header>

    <div class="title-image"></div> 

<div class="fadeout">
    <div class="hero-text fadein">
      
        <h1>Welcome to WESLEY's Bookstore</h1>
        <h2>READ ANYWHERE AND ANYTIME.</h2>
      
        <a href="http://chelan.highline.edu/~wesley16838/cs215/week7/ACCOUNT.php" class="btn blue" style="padding: 10px 20px 10px 20px;">Join free forever</a>
    </div>
</div>


    <!--POP UP FORM-->
    <div id="id01" class="modal">

      <form class="form-style-7 animate" action="homepage.php" method="post">
        

      <div class="container">
         <h1>Login Form</h1>
        <ul>

          <li>
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" id="uname" placeholder="Enter your Username"  value="<?php if (isset($_POST['submit'])) {echo $_POST['uname'];}?>" required>
          <span>Enter your Username</span>
          </li>
          <li>
          <label for="psw"><b>Password</b></label>         
          <input type="password" placeholder="Enter Password" name="psw" id="psw" placeholder="Enter your Password"  value="<?php if (isset($_POST['submit'])) {echo $_POST['psw'];}?>" required>
           <span>Enter your Password</span>
          </li>
          <li style="text-align: left;">
          <button style="width:100%;" type="submit">Login</button><br>
          </li>
        </ul>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">No account? <a href="#">Create Account</a></span>
  </div>
</form>
</div>


<a href="#content" class="content-click"><div class="arrow bounce"></div></a>


<!--content*-->
<article id="content">
 <div class="tab">
  <button class="tablinks btn-2" onclick="openCity(event, 'Genre')" id="defaultOpen">All Genres</button>
  <button class="tablinks btn-2" onclick="openCity(event, 'Ease')">No ads, No hard sell</button>
  <button class="tablinks btn-2" onclick="openCity(event, 'Responsive')">Responsive</button>
  <button class="tablinks btn-2" onclick="openCity(event, 'Free')">Free become member</button>
</div>

<div id="Genre" class="tabcontent">
    <span class="innercontent">
        <span class="text">
          <h3>All Genres books in the bookstore.</h3>
          <p>You can find all different genres books in the bookstore.</p>
      </span>
  </span>
  <span class="innercontent">
    <img src="book.png" style="width:600px;">
</span>
</div>

<div id="Ease" class="tabcontent">
  <span class="innercontent">
    <span class="text">
      <h3>No advertisement. No hard sell.</h3>
      <p>Please help yourself. Sit down, make yourself at home.</p>
  </span>
</span>
<span class="innercontent">

    <img src="readingnew.png" style="width:600px;">

</span>
</div>

<div id="Responsive" class="tabcontent">
  <span class="innercontent">
    <span class="text">
      <h3>All Responsive</h3>
      <p>You can use any device to smoothly visit my bookstore .</p>
  </span>
</span>
<span class="innercontent">

    <img src="responsive.png" style="width:600px;">

</span>
</div>

<div id="Free" class="tabcontent">
  <span class="innercontent">
    <span class="text">
      <h3>All free to become member</h3>
      <p>Easy way to become member. Becoming member without paying.</p>
  </span>
</span>
<span class="innercontent">

    <img src="freead.png" style="width:600px;">

</span>
</div>


</article>


<!----------- Footer ------------>

<div id="footer">
 <div class="tomottoWrap">
    <div id="tomotto">
      “Knowledge brings wealth.” 
      ― Hsun-Tzu, ENCOURAGING, LEARNING
  </div>
</div>
<div class="lookWrap">
    <div id="look">
      <div class="sec">
        <h3>Support</h3>
        <a href="#">Your Account</a>
        <a href="#">FAQs</a>
        <a href="#">FAQs</a>
        <a href="#">Contact Me</a>
        <a href="#">Shipping Information</a>
        
    </div>
    <div class="sec">
        <h3>Cart</h3>
        <a href="#">Go to cart</a>
        <a href="#">Your Orders</a>


    </div>
    <div class="sec">
        <h3>Follow Us</h3>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>               
        <a href="#">Instagram</a>
    </div>
    <div class="sec">
        <h3>About</h3>
        <a href="#">About Bookstore</a>
        <a href="#">About me</a>      

    </div>      
</div>
<div class="legality">
    © Copyright 2018 -  Wesley studio
</div>
</div>

</div>



<!-- link to external JS file -->
<script src="scripts.js"></script>

</body>
</html>