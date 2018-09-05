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
		$nameErr = $pwordErr =  $addressErr = $cityErr = $stateErr = $zipcodeErr = $phoneErr = $emailErr = "";
		$name = $pword =  $address = $city = $state = $zip = $phone = $mail  = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (empty($_POST["Name"])) {
				$nameErr = "User Name is required";
				} else {
				$name = $_POST["Name"];
				clean($name);
			}
			
			if (empty($_POST["Password"])) {
				$pwordErr = "Password is required";
				} else {
				$pword = $_POST["Password"];
				clean($name);
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
			
			if (empty($_POST["Phone"])) {
				$phoneErr = "Phone is required";
				} else {
				$phone = $_POST["Phone"];
				clean($phone);
			}
			
			
			
			if (empty($_POST["Email"])) {
				$emailErr = "Email is required";
				} else {
				$mail = $_POST["Email"];
				clean($mail);
			}
			
			
		}
	?>
	<?php
		ini_set('display_errors', 1);
		error_reporting(E_ALL);
	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="http://chelan.highline.edu/~wesley16838/cs215/homepage/landingpage.html">Bookstore</a>
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
				<legend>Sign up form</legend>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="Name">Name:</label>
						<input type="text" name="Name" class="form-control" id="Name" placeholder="Enter your Name" value="<?php if (isset($_POST['submit'])) {echo $_POST['Name'];}?>">
						<span class="error">* <?php echo $nameErr;?></span>
					</div>
					<div class="form-group col-md-6">
						<label for="Password">Password:</label>
						<input type="text" name="Password" class="form-control" id="Password" placeholder="Enter your Password" value="<?php if (isset($_POST['submit'])) {echo $_POST['Password'];}?>">
						<span class="error">* <?php echo $pwordErr;?></span>
					</div>
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
					<label for="Phone">Phone Number:</label>
					<input type="text" name="Phone" class="form-control" id="Phone" placeholder="Enter phone number" value="<?php if (isset($_POST['submit'])) {echo $_POST['Phone'];}?>">
					<span class="error">* <?php echo $phoneErr;?></span>
				</div>
				<div class="form-group">
					<label for="Email">Email:</label>
					<input type="email" name="Email" class="form-control" id="Email" placeholder="Enter Email" value="<?php if (isset($_POST['submit'])) {echo $_POST['Email'];}?>">
					<span class="error">* <?php echo $emailErr;?></span>
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
				$queryString = "INSERT INTO Account (Name,Email,Password,Address,City ,State ,Zip ,Phone) VALUES ('$name','$mail','$pword','$address','$city','$state','$zip','$phone')";
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