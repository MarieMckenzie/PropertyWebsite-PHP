
<html>

		<?PHP
		
		SESSION_start();
		
		if(!isset($_POST['submit'])){
		
	
				$_SESSION['stradd1']=$_POST['stradd1'];
				$_SESSION['stradd2']=$_POST['stradd2'];
				$_SESSION['city']=$_POST['city'];
				$_SESSION['parish']=$_POST['parish'];
		}
		
		
		$stradd1 = trim($_POST['stradd1']);
		if(empty($stradd1))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		$stradd2 = trim($_POST['stradd2']);
		if(empty($stradd2))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		$city = trim($_POST['city']);
		if(empty($city))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		$parish = trim($_POST['parish']);
		if(empty($parish))
		{
			echo "Required";
			$errFlag = 1;
		}
		
	 
	 if($_SESSION['errFlag'] == 0){
	 $locationFile= fopen("location.txt", 'w');
	 fwrite($loctionFille,$stradd1.", ". $stradd2.", ". $city.", ". $parish);
	 fclose($locationFile);
	 }
	     ?>
<p><!--display what was submit--> 
			<a href="registration.php">PREVIOUS </a>
		    <a href="description.php">NEXT </a></p>
				
				
