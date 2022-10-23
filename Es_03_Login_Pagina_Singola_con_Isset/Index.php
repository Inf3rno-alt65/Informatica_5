<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> Login Page </title>
</head>
<body>
<?php

if(isset($_POST['username']) && trim($_POST['password'])) 
{
	$user=$_POST['username'];
	$pssw=$_POST['password'];
	
		if($user=="Andrea" && $pssw=="ciao")
		{
			echo "Credenziali corrette";
			header("Location: https://www.itcserasmo.it/");
		}
		
		else
		{	
			?>
			<span class="center">
			<h2>Credenziali sbagliate</h2>
			</span>
			
			<?php
		}
	
}
?>
	
	 <div class="login-page"> 
      <div class="form">
        <div class="login">
          <div class="login-header">
			<h2> Login </h2>
		  </div>
		</div>
		  
	<form class="login-form" action="index.php" method="POST">
	  <input type="text" name="username" placeholder="username"/>
	  <input type="password" name="password" placeholder="password"/>
	  <button>login</button>
	  
	</form>
	 </div>
	</div>

</body>
</html>
