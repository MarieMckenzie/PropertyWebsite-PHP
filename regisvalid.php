
<?PHP
		SESSION_start();
		
		if(!isset($_POST['submit'])){
		
	
				$_SESSION['name']=$_POST['name'];
				$_SESSION['telnum']=$_POST['telnum'];
				$_SESSION['email']=$_POST['email'];
				$_SESSION['uname']=$_POST['uname'];
				$_SESSION['pword']=$_POST['pword'];
				$_SESSION['cpword']=$_POST['cpword'];
		}
		
		
		#check telephone format
	$telnum = $_POST['telnum'];
		if($telnum=="")
		{
			echo "Please provide telephone number";
			$errFlag = 1;

		}else{
		
		 if (!preg_match("/^\d{3}-\d{3}-\d{4}$/",$cphone))
			{
				echo $_SESSION['telnum']." Format  ***-***-****";
				$errFlag = 1;
				$_SESSION['errFlag'] = 1;
			}
		}
		
		#check if email is valid	
	$email = trim($_POST['email']);
		if(empty($email))
		{
			echo "Email is required";
			$errFlag = 1;

		}else{
			if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL))
			{
				echo $_SESSION['email']."Invalid Email";
				$errFlag = 1;
				$_SESSION['errFlag'] = 1;
			}
		}
		
		$pword = trim($_POST['pword']);
		if(empty($pword))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		$cpword = trim($_POST['cpword']);
		if(empty($cpword))
		{
			echo "Required";
			$errFlag 
		}
		
		#check if passwords match
		
			 if($cpword!=$pword))
				{
					echo "Passwords don't match";
					$errFlag = 1;
					$_SESSION['errFlag'] = 1;
				}
		}
		
		
	 echo "You entered:</br></br>";
	 echo "Name:".$_SESSION["name"]."</br></br>"; 
	 echo "Telephone Number:" .$_SESSION["telnum"]."</br></br>";
	 echo "Email:" .$_SESSION["email"]."</br></br>";
	 echo "Username:". $_SESSION["uname"]."</br></br>";
	 ///echo $_SESSION["pword"]."</br></br>";
	 //echo $_SESSION["cpword"]."</br></br>";
	 
	 if($_SESSION['errFlag'] == 0){
	 $registrationFile= fopen("registration.txt", 'w');
	 fwrite($registrationFile,$name.", ". $telnum.", ". $email.", ". $uname.", ".$pword);
	 fclose($registrationFile);
	 }
	 
	 
	 
	 
	 




?>
<p>
<!--display what was submit-->
					<a href="welcome.php">BACK </a>
					<a href="location.php">NEXT </a></p>