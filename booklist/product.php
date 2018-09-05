<?php
	// Define variables used in the HTML header for this page.
$title = 'List' ;
$description = 'Assignment3' ;
$author = 'WEI-HSUAN,WONG' ;
	// Display the header which uses the above variables.
include 'header.php' ;
?>
<body>
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	?>
	<header class="wow fadeIn">
		<p class="wow fadeIn" data-wow-delay=".3s">Welcome to Bookstore</p>
	</header>
	

	<?php
	include 'function_clean.php';

	$db = new PDO('mysql:host=localhost;dbname=wesley16838', 'wesley16838', 'password');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$query="SELECT * from bookstore where UID=".$_GET['UID'];
	$q = $db->query($query);


	while($row = $q->fetch()) {
		{
			echo '<article class="wow fadeIn" data-wow-delay=".6s"><div class="grid25"><img class="image" src="data:image/jpeg;base64,' . $row['Image'].'"/>'. '<p style="margin-top:1em;"><STRONG>'.$row['booktitle'].'</STRONG></p><p style="margin-top:1em;"">By&nbsp<strong class="italic">'.$row['bookauthor'].'</strong></p></div><div class="grid75"><h1><strong>'. $row['booktitle']. "</h1></strong><br>" .$row['Genre']."&nbsp|&nbsp".$row['bookauthor']. '&nbsp|&nbsp' . $row['Publisher']. '&nbsp|&nbsp' . $row['Year'] . '&nbsp|&nbspPages(US):' . $row['Pages'] . "<br><p>" . "$" . $row['Price'] . "&nbsp|&nbsp" . "ISBN: " . $row['ISBN'] . "</p><hr>" . $row['Description']. '</div></article>';
			
			

		}
	}

	?>

	<input style="margin-left:5%; margin-right: 1em; margin-top: 1em; margin-bottom: 1em;" type ="button" class="wow fadeIn btn btn-primary" onclick="history.back()" value="Go back"></input>
	<a href="" style="margin-top: 1em; margin-bottom: 1em;" class="wow fadeIn btn btn-primary">Add to cart</a>


	

	







	<script>
		new WOW().init();

	</script>
</body>
</html>