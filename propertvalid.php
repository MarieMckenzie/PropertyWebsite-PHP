

<?php 
SESSION_start();
		
		if(!isset($_POST['submit'])){
						$_SESSION['property']=$_POST['property'];
						$_SESSION['acre']=$_POST['acre'];
						$_SESSION['bldgType']=$_POST['bldgType'];
						$_SESSION['bdrnum']=$_POST['bdrnum'];
						$_SESSION['bthnum']=$_POST['bthrnum'];
						$_SESSION['listType']=$_POST['listType'];
						$_SESSION['price']=$_POST['price'];

		}
		
		$property = trim($_POST['property']);
		if(empty($property))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		$acre = trim($_POST['acre']);
		if(empty($acre))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		
		$bdrnum = trim($_POST['bdrnum']);
		if(empty($bdrnum))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		
		$bthnum = trim($_POST['bthnum']);
		if(empty($bthnum))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		
		$listType = trim($_POST['listType']);
		if(empty($listType))
		{
			echo "Required";
			$errFlag = 1;
		}
		
		
		
		$price = trim($_POST['price']);
		if(empty($price))
		{
			echo "Required";
			$errFlag = 1;
		}
	
	 
	 
	 if($_SESSION['errFlag'] == 0){
	 $descripFile= fopen("description.txt", 'w');
	 fwrite($descripFile,$property.", ".$acre.", ". $bdrnum.", ". $bthnum.", ". $listType.", ".$price);
	 fclose($descripFile);
	 }
	?>
			 <p><!--display what was submit--> 
			 <a href="location.php">BACK </a>
			 <a href="summary.php">FINISH </a>
			 </p>