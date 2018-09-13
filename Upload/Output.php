<?php
	// Define variables used in the HTML header for this page.
	$title = 'Bookstore table' ;
	$description = 'Bookstore table' ;
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
			try
			{
				$db = new PDO('mysql:host=localhost;dbname=wesley16838', 'wesley16838', 'password');
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$queryString = "SELECT `booktitle`,`bookauthor`,`ISBN`,`Description`,`Publisher`,`Genre`,`Pages`,`Year`,`Price`,`Image` from bookstore ";
				$q = $db->query($queryString);
				echo '<table class="table"> <tr><th> booktitle </th> <th> bookauthor </th> <th> ISBN </th> <th> Description </th> <th> Publisher </th> <th> Genre </th> <th> Pages </th> <th> Year </th> <th> Price </th> <th> Image </th></tr>';
				while($row = $q->fetch())
			{

						echo '<tr> <td>' . $row['booktitle']. '</td> <td>'. $row['bookauthor']. '</td> <td>' . $row['ISBN'] . '</td><td>' . $row['Description']. '</td><td>' . $row['Publisher']. '</td><td>' . $row['Genre']. '</td><td>' . $row['Pages']. '</td><td>' . $row['Year']. '</td><td>' . $row['Price']. '</td><td>' .'<img src="data:image/jpeg;base64,' . $row['Image'].'"/>'. '</td></tr>';
					};
					echo '</table>';
			


				
			}
			catch(PDOException $e)
			{
				print "Couldn't connect to the database: " . $e->getMessage();
			}
		
	?>
	
	</div>
</body>
</html>