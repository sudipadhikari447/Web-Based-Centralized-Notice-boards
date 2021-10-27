<html>
<head>
	<title> Login page </title>
<style>
.start{
	width: 400px;
	height: 300px;
	text-align: center;
	background-color: #e6eaed;
	margin: 0 auto;
	margin-top: 100px;
    border-radius: 5px;
	
}
.btn
{
	width: 200px;
	height: 30px;
	border-radius: 3px;
	font-size: 15px;
	background-color: #8cc4ff;
}
p
{font-size: 1.5em;
font-color: red;
}
</style>
</head>
<body>
<div class="start">

<form action="goback.php" method="POST">
<center>
<br/><br/><br/>
<p style="color:red">Incorrect username or password!</p> </center><br/><br/>
<input type="submit" name="submit" class="btn" value="Go Back"/><br/>
</form>
</div>
</body>
</html>