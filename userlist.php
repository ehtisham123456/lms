				<?php include 'header.php';?>
  				<?php 
     
				//if (isset($_REQUEST['st_email'])) {
				//$st_email = $_REQUEST['st_email'];
				//$st_password = $_REQUEST['st_password'];
				//$st_password = md5($st_password);
				
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
				$sql = "SELECT * FROM `lms_student`";
				$result = mysqli_query($conn, $sql);
			    
				if (mysqli_num_rows($result) > 0) { 
				// output data of each row
				while($row = mysqli_fetch_assoc ($result)) {
				echo  "Student Name : " . $row["st_name"]. " -- Student Email " . $row["st_email"]. "<br>";
				}
				} else {
				echo "0 results";
				 }
				
				mysqli_close ($conn);
				//}
				?> 
			   
			<?php include 'footer.php';?>