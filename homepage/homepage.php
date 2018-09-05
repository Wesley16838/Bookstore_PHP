<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>WESLEY's Bookstore</title>
  <meta name="description" content="CannaCloud technologies landing page">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- link to external CSS file -->
  <link rel="stylesheet" href="style1.css?v=1.0">

  <!--AWESOMEFONT-->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


<?php
      $cookie_name = "member";
      $cookie_value = $_POST['uname'];
      setcookie($cookie_name, $cookie_value, time() + 86400 , "/"); // 86400 = 1 day
  ?>

</head>
<body>
    <?php
 error_reporting(0);
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
        <li><a href="#" class="btn blue fadein" style="padding: 10px 20px 10px 20px;">Log out</a></li>
        <li><a href="#" class="btn blue fadein" style="padding: 10px 20px 10px 20px;">Cart</a></li>
      </ul>
    </div>
  </header>

<?php
      if(!isset($_COOKIE['member'])) {
       
        } else {
      
      }
    ?>
    <?php
      if (!empty($_POST['uname'])&&!empty($_POST['psw'])) {
        $uname = $_POST['uname'];
        $pword = $_POST['psw'];
        
        
        try
        {
          $db = new PDO('mysql:host=localhost;dbname=wesley16838', 'wesley16838', 'password');
         
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $queryString = "SELECT `Name`,`Password` from Account where `Name` = '$uname' and `Password` = '$pword'";
          $q = $db->query($queryString);
          $row = $q->fetch();
          if($row['Name'] == $uname and $row['Password'] == $pword) {
            
            }else{
            
           
          }
          $db = null;
        }
        catch(PDOException $e)
        {
          print "Couldn't connect to the database! " . $e->getMessage();
        }
      }   
    ?>

  <div class="title-image"></div> 


    <div class="hero-text fadein">
      <h1>WESLEY's Bookstore</h1>
      <h2>READ ANYWHERE AND ANYTIME.</h2>

      <form class="example" role="search" action="List.php" method="post" style="max-width:300px">
        
        <label for="search"></label>
            <input class="form-control" placeholder="Search" name="search" id="search" type="text" value="<?php if (isset($_POST['submit'])) {echo $_POST['search'];}?>">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

    </div>


    <figure class="icon-cards fadein">
      <div class="icon-cards__content">
        <div class="icon-cards__item"><span class="hero-text"><a href="#" class="bt btn3">Hot Sale!</a></span></div>
        <div class="icon-cards__item"><span class="hero-text"><a href="#" class="bt btn3">Hot Sale!</a></span></div>
        <div class="icon-cards__item"><span class="hero-text"><a href="#" class="bt btn3">Hot Sale!</a></span></div>
      </div>
    </figure>



  <a href="#content" class="content-click"><div class="arrow bounce"></div></a>

  <!--content*-->
  <a id="content"></a>
  <div id="scene">
    <div id="left-zone">
      <ul class="list">
        <li class="item">
          <input type="radio"  checked="checked"/>
          <label class="label_HarryPotterSeries">HarryPotter Series</label>
          
        </li>
        <li class="item">
          <input type="radio" id="radio_Harry Potter and the Order of the Phoenix is a fantasy novel written by J. K. Rowling and the fifth novel in the Harry Potter series." name="basic_carousel" value="Harry Potter and the Order of the Phoenix is a fantasy novel written by J. K. Rowling and the fifth novel in the Harry Potter series." checked="checked"/>
          <label class="label_HarryPotterandtheOrderofthePhoenix" for="radio_Harry Potter and the Order of the Phoenix is a fantasy novel written by J. K. Rowling and the fifth novel in the Harry Potter series.">Fifth novel</label>
          <div class="content content_HarryPotterandtheOrderofthePhoenix"><span class="picto"></span>
            <h1>The Order of the Phoenix</h1>
            <a href="#" class="bt btn3">Read More</a>
          </div>
        </li>
        <li class="item">
          <input type="radio" id="radio_Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the Harry Potter series." name="basic_carousel" value="Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the Harry Potter series."/>
          <label class="label_HarryPotterandtheDeathlyHallows" for="radio_Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the Harry Potter series.">Seventh novel</label>
          <div class="content content_HarryPotterandtheDeathlyHallows"><span class="picto"></span>
            <h1>The Deathly Hallows</h1>
            <a href="#" class="bt btn3">Read More</a>
          </div>
        </li>
        <li class="item">
          <input type="radio" id="radio_Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series." name="basic_carousel" value="Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series."/>
          <label class="label_HarryPotterandtheChamberofSecrets" for="radio_Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series.">Second novel</label>
          <div class="content content_HarryPotterandtheChamberofSecrets"><span class="picto"></span>
            <h1>The Chamber of Secrets</h1>
            <a href="#" class="bt btn3">Read More</a>
          </div>
        </li>
        <li class="item">
          <input type="radio" id="radio_It is the first novel in the Harry Potter series and Rowling's debut novel, first published in 1997 by Bloomsbury." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
          <label class="label_HarryPotterandtheSorcererStone" for="radio_It is the first novel in the Harry Potter series and Rowling's debut novel, first published in 1997 by Bloomsbury.">First novel</label>
          <div class="content content_HarryPotterandtheSorcererStone"><span class="picto"></span>
            <h1>The Sorcerer's Stone</h1>
            <a href="#" class="bt btn3">Read More</a>
          </div>
        </li>
      </ul>
    </div>
    <div id="middle-border"></div>
    <div id="right-zone"></div>
  </div>
  <section>
    <p style="text-align: center;
    font-size: 2em;
    font-weight: bold;">Nightside Series</p>
    <ul id="c"> 
        
        <li><p>Book1</p><img src="newbooknight1.jpg" alt=""></li>
        <li><p>Book2</p><img src="newbooknight2.jpg" alt=""></li>
        <li><p>Book3</p><img src="newbooknight3.jpg" alt=""></li>
        <li><p>Book4</p><img src="newbooknight4.jpg" alt=""></li>

        <li><p>Book5</p><img src="newbooknight5.jpg" alt=""></li>
        <li><p>Book6</p><img src="newbooknight6.jpg" alt=""></li>
        <li><p>Book7</p><img src="newbooknight7.jpg" alt=""></li>
        <li><p>Book8</p><img src="newbooknight8.jpg" alt=""></li>

        <li><p>Book9</p><img src="newbooknight9.jpg" alt=""></li>
        <li><p>Book10</p><img src="newbooknight10.jpg" alt=""></li>
        <li><p>Book11</p><img src="newbooknight11.jpg" alt=""></li>
        <li><p>Book12</p><img src="newbooknight12.jpg" alt=""></li>

    </ul>
    </section>
  








  


  <!-- Footer -->

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

<script src="script1.js"></script>

</body>
</html>