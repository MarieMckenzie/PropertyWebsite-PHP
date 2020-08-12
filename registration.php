<?php
  
   SESSION_start();
				
	if(!isset($_SESSION['errFlag']) || $_SESSION['errFlag']==0){
	$_SESSION['name'] = "";
    $_SESSION['telnum'] = "";
    $_SESSION['email'] = "";
    $_SESSION['uname'] = "";
    $_SESSION['pword'] = "";
    $_SESSION['cpword'] = "";
	
	    $errFlag = 0;
		$_SESSION['errFlag'] = 0;
}
				

?>


<!DOCTYPE html>
	<html>
		<body>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		 <h2> SECTION 1 of 3 </h2>
		 
		  <h3>CONTACT/LOGIN</h3>

	
		 
			<form action="regisvalid.php" method="post">
				 NAME <input type="text" name="name" value="<?php echo $_SESSION['name'];?>" ></br></br>
				 TELEPHONE NUMBER <input type="text" name="telnum" value="<?php echo $_SESSION['telnum'];?>" > </br></br>
				 EMAIL ADDRESS <input type="text" name="email" value="<?php echo $_SESSION['email'];?>" ></br></br>
				 USERNAME <input type="text" name="uname" value="<?php echo $_SESSION['uname'];?>" ></br> </br>
				 PASSWORD <input type="text" name="pword" value="<?php echo $_SESSION['pword'];?>" > </br> </br>
				 CONFIRM PASSWORD <input type="text" name="cpword" value="<?php echo $_SESSION['cpword'];?>" > </br> </br>
				 
				  <!--<button type="submit" formaction="registration.php">Click me</button>--> 
				   	<!--submit button to store info-->
					<input type="submit" value="Submit" name="submit">
		
		
			 </form>
			 
			 
			
		</body>
	</html>
