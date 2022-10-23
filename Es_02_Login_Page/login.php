<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h3>Check credenziali</h3>
	
<?php

	$user=$_POST['username'];
	$pssw=$_POST['password'];
	
	if(!isset($user) || trim($user) == '' || !isset($pssw) || trim($pssw) == '' )		
	{
		echo "campi/o vuoto";
	}
	
	if($user=="Andrea" && $pssw=="ciao")
	{
		echo "<h4> Benvenuto " .$user."<br>nell'area riservata del sito</h4></br>";
	}
	
	else
	{
		echo "<h1> accesso negato";
	}
	
?>

</body>
</html>
	