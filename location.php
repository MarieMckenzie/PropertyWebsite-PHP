	<?php
			 SESSION_start();
				 
					if(!isset($_SESSION['errFlag']) || $_SESSION['errFlag']==0){
					$_SESSION['stradd1'] = "";
					$_SESSION['stradd2'] = "";
					$_SESSION['city'] = "";
					$_SESSION['parish'] = "";
					
					    $errFlag = 0;
						$_SESSION['errFlag'] = 0;
}
	?>
			
	
	
<!DOCTYPE html>
	<html>
	<link rel="stylesheet" type="text/css" href="style.css">
		<body>
		<h1> MI CASA </h1>
		
		 <h2> SECTION 2 of 3</h2>
		 
		  <h3>LOCATION OF PROPERTY</h3>
		  
		  
		
				
				
			<form action="locatevalid.php" method="post">
			
			 STREET ADDRESS 1 <input type="text" name="stradd1" value="<?php echo $_SESSION['stradd1'];?>" ></br></br>
			 STREET ADDRESS 2 <input type="text" name="stradd2" value="<?php echo $_SESSION['stradd2'];?>" > </br></br>
			
			 CITY <input type="text" name="city" value="<?php echo $_SESSION['city'];?>" ired> </br></br>
			 
			 PARISH 
			 <select name="parish" value="<?php echo $_SESSION['parish'];?>" >
			  <option value="">KINGSTON</option>
			  <option value="">ST. ANDREW</option>
			  <option value="">PRTLAND</option>
			  <option value="">ST. THOMAS</option>
			  <option value="">ST.CATHERINE</option>
			  <option value="">ST.ANN</option>
			  <option value="">ST.ELIZABETH</option>
			  <option value="">ST.JAMES</option>
			  <option value="">MANCHESTER</option>
			  <option value="">CLARENDON</option>
			  <option value="">HANOVER</option>
			  <option value="">TRELWANY</option>
			  <option value="">WESTMORELAND</option>
			  <option value="">ST. MARY</option>
			</select></br></br>
			
			<!--submit button to store info-->
			<input type="submit" value="Submit" name="submit">
				
			 </form>
			
				
		
			
				
				
	
			
		</body>
	</html>
