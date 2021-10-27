<!DOCTYPE html>
<html>
	<head>
	<title>Dashboard</title>
		<style type="text/css">
		
		body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #8cc4ff;
  padding: 16px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 200px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  padding-left: 20px,
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  border-radius:5px;
  background-color: #e6eaed;
}

/* Full-width input fields */
.form-container input[type=text]{
  width: 100%;
  height: 400px;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  border-radius: 3px;
}


/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #8cc4ff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  width: 150px;
  height: 35px;
  margin-bottom:10px;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
        .btn1{ width:80px;
        height:30px;
        font-size:15px;
        border-radius:5px;
        cursor: pointer;
        background-color:#e6eaed
        }
        .btn{
        width:250px;
        height:30px;
        font-size:15px;
        border-radius:5px;
        border: none;
        cursor: pointer;
        background-color:#8cc4ff
        }
		.container {
			width:1000px;
			height:650px;
			background-color:#e6eaed;
			padding-top:25px;
			padding-left:25px;
			padding-right:25px;
            border-radius:10px;
		}
        #left{
		cursor: pointer;
        float:left;
        }
		#st-box {
			float:left;
			width:300px;
			height:400px;
			background-color:white;
			border:none;
            border-radius:5px;
		}
		#nd-box {
			float:left;
			width:300px;
			height:400px;
			background-color:white;
			border:none;
			margin-left:50px;
            border-radius:5px;
		}
		#rd-box {
			float:right;
			width:300px;
			height:400px;
			background-color:white;
			border:none;
            border-radius:5px;
         }
		h1 {
			color:black;
		}
		.dropbtn {
		  background-color: #8cc4ff;
		  
		  
		  padding: 10px;
		  font-size: 15px;
		  border: none;
		  border-radius: 3px;
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f1f1f1;
		  min-width: 160px;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  border-radius: 3px;
		}

		.dropdown-content a:hover {background-color: #ddd;}

		.dropdown:hover .dropdown-content {display: block;}

		.dropdown:hover .dropbtn {background-color: #b9c3c4;}
		</style>
	</head>
	
	<body>
		<center><br>
        <h1>Welcome to Centralized Notice Board System</h1>
		 <form action="logout.php" method="POST">
    	<p align="right"><input type="submit" name="submit" class="btn1" value="Logout"/></form></p><br><br>
  	<div class="container">
    		<div id="left">
             <div class="dropdown">
              <button class="dropbtn">View Previous Notices</button>
              <div class="dropdown-content">
                <a href="coridor-table.php">Coridor Notices</a>
                <a href="ecedepart-table.php">ECE Depart Notices</a>
                <a href="staffroom-table.php">Staffroom Notices</a>
              </div>
            </div>
            </div><br><br><br><br>
            
			<div id="st-box">
            <form action="ecedepart.php"><br>
			<textarea id="ecedepart" name="ecedepart" rows="23" cols="30">
 			</textarea><br><br><br>
            <p>Notice Board 1 (For ECE Department)</p><br>
 			<input type="submit" class="btn" value="Submit" >
			</form>
        	</div>
			
			<div id="nd-box">
            <form action="coridor.php"><br>
			<textarea id="coridor" name="coridor" rows="23" cols="30">
 			</textarea><br><br><br>
            <p>Notice Board 2 (For Coridor)</p><br>
 			<input type="submit" class="btn" value="Submit">
			</form>
            </div>
			
			<div id="rd-box">
            <form action="staffroom.php"><br>
			<textarea id="staffroom" name="staffroom" rows="23" cols="30">
 			</textarea><br><br><br>
            <p>Notice Board 3 (For Staffroom)</p><br>
 			<input type="submit" class="btn" value="Submit">
			</form>
            </div>
            
		</div>
        <button class="open-button" onclick="openForm()"> Submit same notice for all</button>

			<center>
			<div class="form-popup" id="myForm">
			  <form action="forall.php" class="form-container">
				<p1>For all Notice Boards</p1>

				<textarea id="forall" name="forall" rows="23" cols="30">
						</textarea><br><br><br>
				
				
				<input type="submit" class="btn" value= "Submit"</button>
			  </form>
			</div>
			</center>
			<script>
			function openForm() {
			  document.getElementById("myForm").style.display = "block";
			}

			function closeForm() {
			  document.getElementById("myForm").style.display = "none";
			}
			</script>
        </body>
</html>					
