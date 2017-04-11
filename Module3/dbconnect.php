<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connectiont</title>
</head>

<style type="text/css">

	h5,h4,h3,h2 {
		font-family : "Blackoak Std";
		}
		

</style>

<body>

<div data-role="page" id="FirstPage" data-theme="d">
    
    	<center><h5>Welcome to The Armoured Vehicle Museum</h5></center>
        
    	<center><img src="Logo development final.jpg"  height="290" width="320" alt="logo" /></center>
        

<?php

$dbc = mysqli_connect('tesuserg_PhPConnection', 'tesuserg_phpcons' , 'DarkEight1995', 'tesuserg_PhPConnection')
	or die('Could not connect to MySQL.');
		
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
	mysqli_query($dbc, $query)
		or die('Error not insterted');
		
	echo 'You successfully registred in our database!'; 
	
	echo '<a href="index1.html">Back on page</a>';
		
	mysqli_close($dbc);

?>

<div data-role="footer" data-position="fixed" >
			<h8>&copy;Dragos, Denis, Denis, Alex and Sergiu 2015</h8>
		
       </div>	
    
    </div>
    
</body>
</html>
