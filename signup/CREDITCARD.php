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
		$nameErr = $cardErr =  $cvvnumberErr = $addressErr = $cityErr = $stateErr = $zipcodeErr = $expireErr =  "";
		$name = $card =  $cvvnumber = $address = $city = $state = $zip  = $expire =  "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (empty($_POST["Name"])) {
				$nameErr = "User Name is required";
				} else {
				$name = $_POST["Name"];
				clean($name);
			}
			
			if (empty($_POST["Card"])) {
				$cardErr = "Password is required";
				} else {
				$card = $_POST["Card"];
				clean($card);
			}
			
			if (empty($_POST["cvvnumber"])) {
				$cvvnumberErr = "Cvv# is required";
				} else {
				$cvvnumber = $_POST["cvvnumber"];
				clean($card);
			}
			
			
			if (empty($_POST["Address"])) {
				$addressErr = "Address is required";
				} else {
				$address = $_POST["Address"];
				clean($address);
			}
			
			if (empty($_POST["City"])) {
				$cityErr = "City is required";
				} else {
				$city = $_POST["City"];
				clean($city);
			}
			
			if (empty($_POST["State"])) {
				$stateErr = "State is required";
				} else {
				$state = $_POST["State"];
				clean($state);
			}
			
			if (empty($_POST["Zip"])) {
				$zipcodeErr = "Email is required";
				} else {
				$zip = $_POST["Zip"];
				clean($zip);
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
				<legend>Credit card information form</legend>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="Name">Name:</label>
						<input type="text" name="Name" class="form-control" id="Name" placeholder="Enter your Name" value="<?php if (isset($_POST['submit'])) {echo $_POST['Name'];}?>">
						<span class="error">* <?php echo $nameErr;?></span>
					</div>
					<div class="form-group col-md-6">
						<label for="Card">Card:</label>
						<input type="text" name="Card" class="form-control" id="Card" placeholder="Enter your Card" value="<?php if (isset($_POST['submit'])) {echo $_POST['Card'];}?>">
						<span class="error">* <?php echo $cardErr;?></span>
					</div>
				</div>

				
				<div class="form-group">
					<label for="cvvnumber">CVV Number:</label>
					<input type="text" name="cvvnumber" class="form-control" id="cvvnumber" placeholder="Enter your cvvnumber" value="<?php if (isset($_POST['submit'])) {echo $_POST['cvvnumber'];}?>" >
					<span class="error">* <?php echo $addressErr;?></span>
				</div>


				<div class="form-group">
					<label for="StreetAddress">Street Address:</label>
					<input type="text" name="Address" class="form-control" id="Address" placeholder="Enter your Address" value="<?php if (isset($_POST['submit'])) {echo $_POST['Address'];}?>" >
					<span class="error">* <?php echo $addressErr;?></span>
				</div>
				
				<div class="form-row">
					
					<div class="form-group col-md-6">
						<label for="City">City:</label>
						<input type="text" name="City" class="form-control" id="City" placeholder="Enter your city" value="<?php if (isset($_POST['submit'])) {echo $_POST['City'];}?>">
						<span class="error">* <?php echo $cityErr;?></span>
					</div>


					<div class="form-group col-md-4">
						<label for="State">State:</label>
						<?php
							$states=array( 
							"-"=>"-",
							"AL"=>"Alabama",
							"AK"=>"Alaska",
							"AZ"=>"Arizona",
							"AR"=>"Arkansas",
							"CA"=>"California",
							"CO"=>"Colorado",
							"CT"=>"Connecticut",
							"DE"=>"Delaware",
							"DC"=>"District of Columbia",
							"FL"=>"Florida",
							"GA"=>"Georgia",
							"HI"=>"Hawaii",
							"ID"=>"Idaho",
							"IL"=>"Illinois",
							"IN"=>"Indiana",
							"IA"=>"Iowa",
							"KS"=>"Kansas",
							"KY"=>"Kentucky",
							"LA"=>"Louisiana",
							"ME"=>"Maine",
							"MD"=>"Maryland",
							"MA"=>"Massachusetts",
							"MI"=>"Michigan",
							"MN"=>"Minnesota",
							"MS"=>"Mississippi",
							"MO"=>"Missouri",
							"MT"=>"Montana",
							"NE"=>"Nebraska",
							"NV"=>"Nevada",
							"NH"=>"New Hampshire",
							"NJ"=>"New Jersey",
							"NM"=>"New Mexico",
							"NY"=>"New York",
							"NC"=>"North Carolina",
							"ND"=>"North Dakota",
							"OH"=>"Ohio",
							"OK"=>"Oklahoma",
							"OR"=>"Oregon",
							"PA"=>"Pennsylvania",
							"RI"=>"Rhode Island",
							"SC"=>"South Carolina",
							"SD"=>"South Dakota",
							"TN"=>"Tennessee",
							"TX"=>"Texas",
							"UT"=>"Utah",
							"VT"=>"Vermont",
							"VA"=>"Virginia",
							"WA"=>"Washington",
							"WV"=>"West Virginia",
							"WI"=>"Wisconsin",
							"WY"=>"Wyoming",
							);
						?>
						<SELECT class="form-control" name="State" id="State" placeholder="Choose your state">
							<?php
								foreach($states as $abbieviation => $state)
								{
									print "<option value='$abbieviation'>$abbieviation</option>";
								}
							?>
						</SELECT>
						<span class="error">* <?php echo $stateErr;?></span>
					</div>
					<div class="form-group col-md-2">
						<label for="Zip">Zip Code:</label>
						<input type="number" name="Zip" class="form-control" id="Zip" placeholder="Enter Zip code" value="<?php if (isset($_POST['submit'])) {echo $_POST['Zip'];}?>">
						<span class="error">* <?php echo $zipcodeErr;?></span>
					</div>
				</div>
				
				<div class="form-group">
					<label for="expire">ExpireDate:</label>
					<input type="text" name="expire" class="form-control" id="expire" placeholder="Enter Expire" value="<?php if (isset($_POST['submit'])) {echo $_POST['expire'];}?>">
					<span class="error">* <?php echo $expireErr;?></span>
				</div>
				
				
				
				
				<button type="submit" class="btn btn-primary" name="submit" value="submit">Sign up</button>
				
				
				
				
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
				$queryString = "INSERT INTO creditcard (Name,Card,CVV,Address,City ,State ,Zip ,Expire) VALUES ('$name','$card','$cvvnumber','$address','$city','$state','$zip','$expire')";
				$q = $db->exec($queryString);
				print "Your entry to the database successfully and go to sign in";
			}
			catch(PDOException $e)
			{
				print "Couldn't connect to the database: " . $e->getMessage();
			}
		}
	?>
	
	
</body>
</html>