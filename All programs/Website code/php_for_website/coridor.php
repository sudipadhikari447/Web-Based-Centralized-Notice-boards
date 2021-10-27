		<?php
		$conn = mysqli_connect("localhost", "root", "", "notices");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$coridor = $_REQUEST['coridor'];
		$sql =  "INSERT INTO `coridor` (`ID`, `coridor_notice`) VALUES (NULL, '$coridor')";
		if(mysqli_query($conn, $sql)){
			echo '<script type="text/javascript"> alert("Corridor Notice Board Updated Successfully") </script>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		?>