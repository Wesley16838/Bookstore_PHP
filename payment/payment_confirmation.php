<?php
	// Define variables used in the HTML header for this page.
$title = 'create account Form' ;
$description = 'create account Form' ;
$author = 'WEI-HSUAN,WONG' ;
	// Display the header which uses the above variables.
include 'header.php' ;

?>
<body>
	<?php
	include 'function_clean.php';
	$cvvnumberErr = $expireErr =  "";
	$cvvnumber = $expire =  "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		
		if (empty($_POST["cvvnumber"])) {
			$cvvnumberErr = "Cvv# is required";
		} else {
			$cvvnumber = $_POST["cvvnumber"];
			clean($cvvnumber);
		}


		if (empty($_POST["expire"])) {
			$expireErr = "Expire is required";
		} else {
			$expire = $_POST["expire"];
			clean($expire);
		}


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
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Employee
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="">Sign up</a>
						<a class="dropdown-item" href="">Sign in</a>
						
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Customer
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="">Sign up</a>
						<a class="dropdown-item" href="">Sign in</a>
						
					</div>
				</li>
				
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
			<fieldset>
				<legend>payment/sale confirmation</legend>
				

				
				<div class="form-group">
					<label for="cvvnumber">CVV Number:</label>
					<input type="text" name="cvvnumber" class="form-control" id="cvvnumber" placeholder="Enter your cvvnumber" value="<?php if (isset($_POST['submit'])) {echo $_POST['cvvnumber'];}?>" >
					<span class="error">* <?php echo $cvvnumberErr;?></span>
				</div>


				

				
				<div class="form-group">
					<label for="expire">ExpireDate:</label>
					<input type="text" name="expire" class="form-control" id="expire" placeholder="Enter Expire" value="<?php if (isset($_POST['submit'])) {echo $_POST['expire'];}?>">
					<span class="error">* <?php echo $expireErr;?></span>
				</div>
				
				
				
				
				<button type="submit" class="btn btn-primary" name="submit" value="submit">Test</button>
				
				
				
				
			</fieldset>
		</form>
		
	</div>
	<?php
	if (isset($_POST['submit'])) {
		try
		{
				//set POST variables
			$url = 'http://chelan.highline.edu/~mwilde/215/creditcardcompany.php';
			$fields = array(
				'cardnumber'=>urlencode($cvvnumber),
				'date'=>urlencode($expire)
			);

//url-ify the data for the POST
			$fields_string = '';
			foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
			rtrim($fields_string,'&');

//open connection
			$ch = curl_init();

//set the url, number of POST vars, POST data
			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
			$result = curl_exec($ch);

//close connection
			curl_close($ch);

		
		}
		catch(PDOException $e)
		{
			print "Your entry is not validated" . $e->getMessage();
		}
	}
	?>
	
	
</body>
</html>