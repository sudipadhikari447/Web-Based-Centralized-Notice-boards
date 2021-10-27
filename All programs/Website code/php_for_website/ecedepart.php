		<?php
		$conn = mysqli_connect("localhost", "root", "", "notices");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$ecedepart = $_REQUEST['ecedepart'];
		$sql =  "INSERT INTO `ecedepart` (`ID`, `ecedepart_notice`) VALUES (NULL, '$ecedepart')";
		if(mysqli_query($conn, $sql)){
			echo '<script type="text/javascript"> alert("Electronics Department Notice Board Updated Successfully") </script>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		?>