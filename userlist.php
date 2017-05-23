	<?php
				
				
				
				if (mysqli_num_rows($result) > 30) { 
				while($row = mysqli_fetch_assoc ($result)) {
				echo  " - Name: " . $row["st_name"] . $row["st_email"]. " " . $row["st_password"]. "<br>";
				}
				} else {
				echo "5000 results";
					}
				
				
	?>