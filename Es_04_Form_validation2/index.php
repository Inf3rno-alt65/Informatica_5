<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style.css">
<div class="container">

 
	
	<?php
			
			$name="";
			$Surname="";
			$phone="";
			$Nick="";
			$Emailaddrs="";
			$Epoca="";
			$St="";
			$Cmu="";
			$Cp="";
			
			if(isset($_POST["nome"])) 
			{
			
				$name=$_POST['nome']; 
			
				if(ctype_alpha($name)!=true) // ctype_alpha serve per controllare i caratteri dell'alfabeto 
				{
					echo "<h3>Sono stati inseriti caratteri non consentiti nel nome</h3>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					
					
				}
			
			}
			
			
			if(isset($_POST['cognome'])) 
			{
			
			$Surname=$_POST['cognome'];
			
				if(preg_match('/^[A-Za-z \'-]+$/i',$Surname)!=true)
				{
					echo "<h3>Sono stati inseriti caratteri non consentiti nel cognome</h3>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					
				}
			
			}
			
			if(isset($_POST['telefono'])) 
			{
			
			$phone=$_POST['telefono'];
			
			if(validate_phone_number($phone) != true)
				{
					echo "Numero di telefono non valido";
					
				}
			
			}
			
			if(isset($_POST['nickname']))
			{
			
				$Nick=$_POST['nickname'];
				
				if($Nick==$name || $Nick==$Surname)
				{
					echo "Nickname non valido";
				}				
			}
			
			if(isset($_POST['email']))
			{
			
				$Emailaddrs=$_POST['email'];
					
			}
			
			if(isset($_POST['data']))
			{
			
				$Epoca=$_POST['data'];
					
			}
			
			if(isset($_POST['via']))
			{
			
				$St=$_POST['via'];
					
			}
			
			if(isset($_POST['comune']))
			{
			
				$Cmu=$_POST['comune'];
					
			}
			
			if(isset($_POST['cap']))
			{
			
				$Cp=$_POST['cap'];
					
			}
			
			
	  ?>
	
    <div class="form">
	
		<form action ="index.php" method="POST">
			
		<div class="header">
		<h2  align="center" class="animation a1">Benvenuto</h2>
		<h4 align="center" class="animation a2">Registrati con le tue credenziali</h4>
		
	  <input  type="text" class="form-field animation a3" placeholder="Nickname" name="nickname" required/>
	  <input type="text" class="form-field animation a3" placeholder="Nome" name="nome" required/>
	  <input type="text" class="form-field animation a3" placeholder="Cognome" name="cognome" required/>
      <input type="email" class="form-field animation a3" placeholder="Email Address" name="email" required/>
      <input type="password" class="form-field animation a4" placeholder="Password" name="password" required/>
	  <input type="date" class="form-field animation a4" placeholder="Data" name="data" required/>
	  <input type="tel" class="form-field animation a4" placeholder="Telefono" name="telefono" required/>
	  <input type="text" class="form-field animation a4" placeholder="via" name="via" required/>
	  <input type="text" class="form-field animation a4" placeholder="cap" name="cap" required/>
	  <input type="text" class="form-field animation a4" placeholder="Comune" name="comune" required/>	
	  <br>
	  </div>
	  
		<input type ="submit" class="pippo animation a6" value="LOGIN"/>
		
		
		<?php
		
		
			echo "<br>";
			echo "<br>";		
			echo "<h2>I tuoi dati</h2>";
			echo "Nome: " .$name;
			echo "<br>";
			echo "Cognome: " .$Surname;
			echo "<br>";
			echo "Telefono: " .$phone;
			echo "<br>";
			echo "Nickname: " .$Nick;
			echo "<br>";
			echo "Email: " .$Emailaddrs;
			echo "<br>";
			echo "Data: " .$Epoca;
			echo "<br>";
			echo "Via: " .$St;
			echo "<br>";
			echo "Comune: " .$Cmu;
			echo "<br>";
			echo "Cap: " .$Cp;

		?>

		
		
		</form>
		
	  
    </div>
  </div>

</div>


</body>

<?php

function validate_phone_number($phone)
{
     // Vado a consentire segni + o - per il numero 
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Rimuovo il segno meno sostituiendolo con un carattere vuoto 
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Controllo la lunghezza del numero 
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14)
	 {
        return false;
     }
	 else
	 {
       return true;
     }
}


?>

</html>