<html>
	<head>
		<title>Form receipt </title>
		<style>
		body {background-color:lightsteelblue; font-family:calibri;}
		</style>
		
		</head>
		
		<body>
		<p>
			Welcome <?php echo $_POST["fname"]; ?> <br />
			Your last name is <?php echo $_POST["lname"]; ?> <br />
			Your email address is <?php echo $_POST["email"]; ?> <br />
			Your password is <?php echo $_POST["password"]; ?> <br />
			Your response to cheese is<?php echo $_POST["cheese"]; ?> <br />
			The kinds of cheese you like include<?php echo $_POST["cheddar"]; ?><?php echo $_POST["swiss"]; ?><?php echo $_POST["stinky"]; ?> <br /> 
			The kinde of cheese you selected is <?php echo $_POST["dropdown"]; ?> <br />
			
			Your cheese comment are:<?php echo $_POST["comments"]; ?> <br />
			</p>
			
			
			
	
		
		
		
		
		
		
		
		
		
		</body>
		</html>