<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>send emails</title>
</head>

<style type="text/css">

	h5,h4,h3,h2 {
		font-family : "Blackoak Std";
		}
		

</style>

<body>

<body>

<div data-role="page" id="FirstPage" data-theme="d">
    
    	<center><h5>Welcome to The Armoured Vehicle Museum</h5></center>
        
    	<center><img src="Logo development final.jpg"  height="290" width="320" alt="logo" /></center>

<?php
  $from = 'tesu_andy_95@yahoo.com';
  $subject = $_POST['subject'];
  $text = $_POST['mymail'];
  $to = 'tesu_andy_95@yahoo.com';

$dbc = mysqli_connect('tesuserg_PhPConnection' , 'tesuserg_phpcons' , 'DarkEight1995', 'tesuserg_PhPConnection')
	or die('Could not connect to MySQL.');

  $query = "SELECT * FROM email";
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

  while ($row = mysqli_fetch_array($result)){
    $to = $row['email'];
    $msg = "Dear member,\n$text";
    mail($to, $subject, $msg, 'From:' . $from);
    echo 'Email sent to: ' . $to . '<br />';
  } 
  
  echo 'Your message has been sent!';
  echo '<a href="index1.html">Back on page</a>';

  mysqli_close($dbc);
?>


<div data-role="footer" data-position="fixed" >
			<h8>&copy;Dragos, Denis, Denis, Alex and Sergiu 2015</h8>
		
       </div>	
    
    </div>

</body>
</html>