<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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




$dbc = mysqli_connect('tesuserg_PhPConnection' , 'tesuserg_phpcons' , '', 'tesuserg_PhPConnection')
	or die('Could not connect to MySQL.');
	
$email= $_POST['email'];

$query = "INSERT INTO email (email) VALUES ('$email')";
mysqli_query($dbc, $query)
	or die('Error not insterted');
	
	echo 'You successfully subscribed!'; 
	
	echo '<a href="index1.html">Back on page</a>';


?>

<div data-role="footer" data-position="fixed" >
			<h8>&copy;Dragos, Denis, Denis, Alex and Sergiu 2015</h8>
		
       </div>	
    
    </div>

</body>
</html>
