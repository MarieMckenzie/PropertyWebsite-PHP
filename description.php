
			<?php

				  SESSION_start();
				 
					if(!isset($_SESSION['errFlag']) || $_SESSION['errFlag']==0){
						$_SESSION['property'] = "";
						$_SESSION['acre'] = "";
						$_SESSION['bldgeType'] = "";
						$_SESSION['bdrnum'] = "";
						$_SESSION['bthrnum'] = "";
						$_SESSION['listType'] = "";
						$_SESSION['price'] = "";
					
						$errFlag = 0;
						$_SESSION['errFlag'] = 0;
			?>
			
			
<!DOCTYPE html>
	<html>
	 
		<body>
		<h1> MI CASA </h1>
		
		 <h2> SECTION 2 of 3</h2>
		 
		  <h3>DESCRITPION OF PROPERTY</h3>
		  
		  
			<form action="propertvalid.php" method="post">
			 TYPE OF PROPERTY 
			 <select name="property" value="<?php echo $_SESSION['property'];?>" required>
			  <option value="">VACANT LOT</option>
			  <option value="">RESIDENTIAL</option>
			  <option value="">COMMERCIAL</option>
			</select></br></br>
			
			 SIZE OF LAND (acres) <input type="text" name="acre" value="<?php echo $_SESSION['acre'];?>"> </br></br>
			 
			 BUILDING TYPE
			 <select name="bldgType" value="<?php echo $_SESSION['bldgType'];?>">
			  <option value="">HOUSING</option>
			  <option value="">APARTMENT</option>
			  <option value="">TOWNHOUSE</option>
			  <option value="">OFFICE SPACE</option>
			</select></br></br>
			 
			 # OF BEDROOMS
			 <select name="bdrnum" value="<?php echo $_SESSION['bdrnum'];?>">
			  <option value="">1</option>
			  <option value="">2</option>
			  <option value="">3</option>
			  <option value="">4</option>
			  <option value="">5</option>
			  <option value="">6</option>
			  <option value="">7</option>
			  <option value="">8</option>
			  <option value="">9</option>
			  <option value="">10</option>
			  <option value="">11</option>
			  <option value="">12</option>
			  <option value="">13</option>
			  <option value="">14</option>
			  <option value="">15</option>
			  <option value="">16</option>
			  <option value="">17</option>
			  <option value="">18</option>
			  <option value="">19</option>
			  <option value="">20</option>
			</select></br></br>
			 
			 # OF BATHROOMS
			 <select name="bthrnum" value="<?php echo $_SESSION['bthrnum'];?>">
			  <option value="">1</option>
			  <option value="">2</option>
			  <option value="">3</option>
			  <option value="">4</option>
			  <option value="">5</option>
			  <option value="">6</option>
			  <option value="">7</option>
			  <option value="">8</option>
			  <option value="">9</option>
			  <option value="">10</option>
			  <option value="">11</option>
			  <option value="">12</option>
			  <option value="">13</option>
			  <option value="">14</option>
			  <option value="">15</option>
			  <option value="">16</option>
			  <option value="">17</option>
			  <option value="">18</option>
			  <option value="">19</option>
			  <option value="">20</option>
			</select></br></br>
			
			 LISTING TYPE
			 <select name="listType" value="<?php echo $_SESSION['listType'];?>">
			  <option value="">RENT</option>
			  <option value="">PURCHASE</option>
			  <option value="">LEASE</option>
			</select></br></br>
			
			 PRICE (JMD) <input type="text" name="price" value="<?php echo $_SESSION['price'];?>"> </br></br> 
			 <!--submit button to store info-->
			 <input type="submit" value="Submit" name="'submit">
			 </form>
		
			
		</body>
	</html>
