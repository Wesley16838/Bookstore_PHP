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
	
	<div class="container">
		<?php
		include 'function_clean.php';
		if (!empty($_POST['search'])) {
			$word = $_POST['search'];
			clean($word);
			try
			{
				$db = new PDO('mysql:host=localhost;dbname=wesley16838', 'wesley16838', 'password');
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$condition=" where bookTitle like '%".$word."%' or bookAuthor like '%".$word."%' or Genre like '%".$word."%' or Publisher like '%".$word."%' or ISBN like '%".$word."%'";
				$query="select * from bookstore" . $condition;
				$q = $db->query($query);
				
				echo '<table class="wow fadeIn table"> <tr><th> Book Cover </th> <th> Information </th></tr>';
				while($row = $q->fetch()) 
				{
			echo '<tr> <td>' . '<a href="producttest.php?UID='.$row['UID'].'"><img src="data:image/jpeg;base64,' . $row['Image'].'"/></a>'. '</td> <td><a href="producttest.php?UID='.$row['UID'].'">'. $row['booktitle']. "</a><br>" .$row['Genre'].",&nbsp".$row['bookauthor'].  "<br>" . "$" . $row['Price'] . "<hr>" . $row['Description']. '</td></tr>';
			
			
						
				}
					echo '</table>';
			}
			catch(PDOException $e)
			{
				print "Couldn't connect to the database: " . $e->getMessage();
			}
		}else{
		echo "Could not search!";
		}
	?>
	<input type ="button" class="wow fadeIn btn btn-primary" onclick="history.back()" value="Go back"></input>
	</div>

	<script>
   	new WOW().init();

   </script>
</body>
</html>