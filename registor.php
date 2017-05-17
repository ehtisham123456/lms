
<?php include 'header.php';?>
 		<?php 

			  
			   if (isset($_REQUEST['st_email'])) {
 				$st_email = $_REQUEST['st_email'];
 				$st_password = $_REQUEST['st_password'];
 				echo $st_email;
 				echo $st_password;
				}
		?>  
			 <!--BEGIN CONTAINER -->
			 <div class="registor-contentainer">
			  <h1>Registor</h1>
			  <form method="post" action="login.php" >
			   <input type="text" placeholder="Username" name="st_email"  /><br />
			   <input type="password" placeholder="password" name="st_password"  /><br />
			   <input type="submit" value="Submit">
			  </form><!-- end form -->
			 <div>
 			<!--END CONTAINER-->
	 	
<?php include 'footer.php';?>			
