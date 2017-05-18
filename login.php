
<?php include 'header.php';?>
 		<?php 
			  
			    if (isset($_REQUEST['st_email'])) {
 				$st_email = $_REQUEST['st_email'];
 				$st_password = $_REQUEST['st_password'];
				$st_password = md5($st_password);
				
				// Create connection
				$dbhost = 'localhost';
   				$dbuser = 'root';
   				$dbpass = '';
				$dbname = "db_lms";
  	 			$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
				mysqli_select_db($conn, $dbname);
   				// Check connection
   				if(! $conn ) {
      			die('Could not connect: ' . mysqli_error());
				}
				$sql = "SELECT * FROM lms_student where  `st_email` = '".$st_email."' and  `st_password` = '".$st_password."'";
				$result = mysqli_query($conn, $sql);
	
				if (mysqli_num_rows($result) > 0) { 
				// output data of each row
				while($row = mysqli_fetch_assoc ($result)) {
				echo  " - Name: " . $row["st_email"]. " " . $row["st_password"]. "<br>";
				}
				} else {
				echo "0 results";
					}
				
				mysqli_close ($conn);
				}
				?> 

   
				
				
			
			 <!--BEGIN CONTAINER -->
			 <div class="login-contentainer">
			  <h1>Login</h1>
			  <form method="post" action="login.php" >
			   <input type="text" placeholder="Username" name="st_email"  /><br />
			   <input type="password" placeholder="password" name="st_password"  /><br />
			   <input type="submit" value="Submit">
			  </form><!-- end form -->
			 <div>
 			<!--END CONTAINER-->
	 	
<?php include 'footer.php';?>			
