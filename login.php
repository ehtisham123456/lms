
<?php include 'header.php';?>
 		<?php 
			  
			   if (isset($_REQUEST['st_email'])) {
 				$st_email = $_REQUEST['st_email'];
 				$st_password = $_REQUEST['st_password'];
 				echo $st_email;
 				echo $st_password;
				}
				// Create connection
				$dbhost = 'localhost';
   				$dbuser = 'root';
   				$dbpass = '';
				$dbname = "db_lms";
  	 			$conn = mysql_connect($dbhost,$dbuser,$dbpass);
   				// Check connection
   				if(! $conn ) {
      			die('Could not connect: ' . mysql_error());
				}
				$sql = "SELECT ,st_email,st_password FROM lms_student";
				$result = "mysqli_query($conn, $sql)";
	
				if (mysqli_num_rows($result) > 0) { 
				// output data of each row
				while($row = mysqli_fetch_assoc ($result)) {
				echo "id: " . $row[""]. " - Name: " . $row["st_email"]. " " . $row["st_password"]. "<br>";
				}
				} else {
				echo "0 results";
					}
	
				'mysqli_close ($conn)';
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
