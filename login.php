
<?php include 'header.php';?>
	<?php print_r($_REQUEST); ?>
 		<?php $st_email = $_REQUEST['st_email'];
 		 	  $st_password = $_REQUEST['st_password'];
			  
			  echo "$st_email";
			  echo "$st_password";
			  
			  ?>
	 		<form class="login" method="post" action="login.php" >
  	 			<input class="input" type="text" placeholder="Username" name="st_email"  /><br />
				<input class="input" type="password" placeholder="password" name="st_password"  /><br />
  	 			<input  class="button" type="submit" value="Submit">
	 		</form>
	 	<h1 class="heading">Login</h1>
<?php include 'footer.php';?>			
