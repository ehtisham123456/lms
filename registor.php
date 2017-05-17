
<?php include 'header.php';?>
 		<?php 

			  	
				 if (isset($_REQUEST['st_email'])) {
				 // DATABASE CONNECT
				 $servername = "localhost";
				 $username = "root";
				 $password = "";
				 $dbname = "db_lms";
				 $conn = mysqli_connect($servername, $username, $password);
				 mysqli_select_db($conn, $dbname);
				 
				 // GETTING DATA FROM FORM
				 $st_email = $_REQUEST['st_email'];
				 $st_password = $_REQUEST['st_password'];
				 $st_name  = $_REQUEST ['st_name'];
				 $st_status = 1;
				 $created_at = date("Y-m-d H:i:s");
				 $updated_at = date("Y-m-d H:i:s");
				
				 $sql = "INSERT INTO `st_student`(`st_name`,`st_email`,`st_password`,`st_status`,`created_at`,`updated_at`)
				 VALUES ('".$st_name."','".$st_email."','".$st_password."','".$st_status."','".$created_at."','".$updated_at."')";
				 mysqli_query($conn,$sql);
				 mysqli_close($conn);
				 
				}

		  ?>  
			 <!--BEGIN CONTAINER -->
			 <div class="registor-contentainer">
			  <h1>Registor</h1>
			  <form method="post" action="registor.php" >
			  <input type="text" placeholder="yourname" name="st_name"  /><br />
			   <input type="text" placeholder="Username" name="st_email"  /><br />
			   <input type="password" placeholder="password" name="st_password"  /><br />
			   <input type="submit" value="Submit">
			  </form><!-- end form -->
			 <div>
 			<!--END CONTAINER-->
			
			

	 	
<?php include 'footer.php';?>			
