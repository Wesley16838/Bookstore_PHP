<?php
	// Define variables used in the HTML header for this page.
$title = 'Book Information' ;
$description = 'Insert Product into the Database' ;
$author = 'WEI-HSUAN,WONG' ;
	// Display the header which uses the above variables.
include 'header.php' ;
?>
<body>
	<?php
	include 'function_clean.php';
	
	$bktitleErr = $bkauthorErr = $isbnErr = $descriptionErr = $publisherErr = $genreErr = $pagesErr = $yearErr = $priceErr = $imageErr ="";
	$bktitle = $bkauthor = $isbn = $description = $publisher = $genre = $pages = $year = $price = $image ="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["bktitle"])) {
			$bktitleErr = "Book title is required";
		} else {
			$bktitle = $_POST["bktitle"];
			clean($bktitle);
		}

		if (empty($_POST["bkauthor"])) {
			$bkauthorErr = "Book author is required";
		} else {
			$bkauthor = $_POST["bkauthor"];
			clean($bkauthor);
		}

		if (empty($_POST["isbn"])) {
			$isbnErr = "ISBN is required";
		} else {
			$isbn = $_POST["isbn"];
			clean($isbn);
		}

		if (empty($_POST["description"])) {
			$descriptionErr = "description is required";
		} else {
			$description = $_POST["description"];
			clean($description);
		}

		if (empty($_POST["publisher"])) {
			$publisherErr = "Publisher is required";
		} else {
			$publisher = $_POST["publisher"];
			clean($publisher);
		}

		if (empty($_POST["genre"])) {
			$genreErr = "Genre is required";
		} else {
			$genre = $_POST["genre"];
			clean($genre);
		}



		if (empty($_POST["pages"])) {
			$pagesErr = "Pages is required";
		} else {
			$pages = $_POST["pages"];
			clean($pages);
		}

		if (empty($_POST["year"])) {
			$yearErr = "Year is required";
		} else {
			$year = $_POST["year"];
			clean($year);
		}

		if (empty($_POST["price"])) {
			$priceErr = "Price is required";
		} else {
			$price = $_POST["price"];
			clean($price);
		}

		if (empty($_POST["image"])) {
			$imageErr = "Image is required";
		} else {
			$image = $_POST["image"];

		}

		$filename=$_FILES['image']['name'];
		$tmpname=$_FILES['image']['tmp_name'];
		$filetype=$_FILES['image']['type'];
		$filesize=$_FILES['image']['size'];    
		$file=NULL;

		if(isset($_FILES['image']['error'])){    
			if($_FILES['image']['error']==0){                                    
				$instr = fopen($tmpname,"rb" );
				$file = addslashes(fread($instr,filesize($tmpname)));        
			}
		}
		$image = addslashes($_FILES['image']['tmp_name']);
		$name = addslashes($_FILES['image']['name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);
	}
	?>
	
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="http://chelan.highline.edu/~wesley16838/csci116/FinalProject/home.php">Bookstore</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>		
	</nav>

	<div class="container">
		
		<form enctype="multipart/form-data" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
			<fieldset>
				<legend>Book information form</legend>
				<p><span class="error">* required field!</span></p>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="Booktitle">Book title:</label>
						<input type="text" name="bktitle" class="form-control" id="bktitle" placeholder="Enter Book Title" value="<?php if (isset($_POST['submit'])) {echo $_POST['bktitle'];}?>">
						<span class="error">* <?php echo $bktitleErr;?></span>
					</div>
					<div class="form-group col-md-6">
						<label for="Author">Author:</label>
						<input type="text" name="bkauthor" class="form-control" id="bkauthor" placeholder="Enter Book Author" value="<?php if (isset($_POST['submit'])) {echo $_POST['bkauthor'];}?>">
						<span class="error">* <?php echo $bkauthorErr;?></span>
					</div>
				</div>
				<div class="form-group">
					<label for="isbn">ISBN:</label>
					<input type="text" name="isbn" class="form-control" id="isbn" placeholder="Enter ISBN" value="<?php if (isset($_POST['submit'])) {echo $_POST['isbn'];}?>" >
					<span class="error">* <?php echo $isbnErr;?></span>
				</div>

				<div class="form-row">

					<div class="form-group col-md-6">
						<label for="description">Description:</label>
						<input type="text" name="description" class="form-control" id="description" placeholder="Enter Description" value="<?php if (isset($_POST['submit'])) {echo $_POST['description'];}?>">
						<span class="error">* <?php echo $descriptionErr;?></span>
					</div>

					<div class="form-group col-md-2">
						<label for="publisher">Publisher:</label>
						<input type="text" name="publisher" class="form-control" id="publisher" placeholder="Enter Publisher" value="<?php if (isset($_POST['submit'])) {echo $_POST['publisher'];}?>">
						<span class="error">* <?php echo $publisherErr;?></span>
					</div>
				</div>
				
				<div class="form-group">
					<label for="genre">Genre:</label>
					<input type="text" name="genre" class="form-control" id="genre" placeholder="Enter Genre" value="<?php if (isset($_POST['submit'])) {echo $_POST['genre'];}?>">
					<span class="error">* <?php echo $genreErr;?></span>
				</div>

				<div class="form-group">
					<label for="pages">Pages:</label>
					<input type="text" name="pages" class="form-control" id="pages" placeholder="Enter Pages" value="<?php if (isset($_POST['submit'])) {echo $_POST['pages'];}?>">
					<span class="error">* <?php echo $pagesErr;?></span>
				</div>

				<div class="form-group">
					<label for="year">Year:</label>
					<input type="text" name="year" class="form-control" id="year" placeholder="Enter Year" value="<?php if (isset($_POST['submit'])) {echo $_POST['year'];}?>">
					<span class="error">* <?php echo $yearErr;?></span>
				</div>

				<div class="form-group">
					<label for="price">Price:</label>
					<input type="text" name="price" class="form-control" id="price" placeholder="Enter Pages" value="<?php if (isset($_POST['submit'])) {echo $_POST['price'];}?>">
					<span class="error">* <?php echo $priceErr;?></span>
				</div>

				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" name="image" class="form-control" id="image" placeholder="Select file" value="<?php if (isset($_POST['submit'])) {echo $_POST['image'];}?>">
					<span class="error">* <?php echo $imageErr;?></span>

					
				</div>

				

				<button type="submit" class="btn btn-primary" name="submit" value="submit">Upload</button>
				<input class="btn btn-primary" type="reset" value="Reset">

			</fieldset>
		</form>

	</div>
	<?php
	
	if (isset($_POST['submit'])) {			

		try
		{
			
			$db = new PDO('mysql:host=localhost;dbname=wesley16838', 'wesley16838', 'password');
			print "Connection successful" . "<br><br>";
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$queryString = "INSERT INTO bookstore (booktitle,bookauthor,ISBN,Description,Publisher,Genre,Pages,Year,Price,Image) VALUES ('$bktitle','$bkauthor' , '$isbn','$description','$publisher','$genre','$pages','$year','$price','$image')";
			$q = $db->exec($queryString);
			print "Sign up successfully";
		}
		catch(PDOException $e)
		{
			print "Couldn't connect to the database: " . $e->getMessage();
		}
	}
	
	?>


</body>
</html>
