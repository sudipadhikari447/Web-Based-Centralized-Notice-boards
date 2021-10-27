		<?php
		$conn = mysqli_connect("localhost", "root", "", "notices");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$staffroom = $_REQUEST['staffroom'];
		$sql =  "INSERT INTO `staffroom` (`ID`, `staffroom_notice`) VALUES (NULL, '$staffroom')";
		if(mysqli_query($conn, $sql)){
			echo '<script type="text/javascript"> alert("Staffroom Notice Board Updated Successfully") </script>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		?>