		<?php
		function coridor($forall){
		$conn = mysqli_connect("localhost", "root", "", "notices");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$coridor = $_REQUEST['forall'];
		$sql =  "INSERT INTO `coridor` (`ID`, `coridor_notice`) VALUES (NULL, '$coridor')";
		if(mysqli_query($conn, $sql)){
			echo '';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		}
		
		function ecedepart($forall){
		$conn = mysqli_connect("localhost", "root", "", "notices");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$ecedepart = $_REQUEST['forall'];
		$sql =  "INSERT INTO `ecedepart` (`ID`, `ecedepart_notice`) VALUES (NULL, '$ecedepart')";
		if(mysqli_query($conn, $sql)){
			echo '';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		}
		
		function staffroom($forall){
		$conn = mysqli_connect("localhost", "root", "", "notices");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$staffroom = $_REQUEST['forall'];
		$sql =  "INSERT INTO `staffroom` (`ID`, `staffroom_notice`) VALUES (NULL, '$staffroom')";
		if(mysqli_query($conn, $sql)){
			echo '<script type="text/javascript"> alert("All Notice Boards Updated Successfully") </script>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);}
		 @coridor(forall);
		 @ecedepart(forall);
		 @staffroom(forall);
		?>
		