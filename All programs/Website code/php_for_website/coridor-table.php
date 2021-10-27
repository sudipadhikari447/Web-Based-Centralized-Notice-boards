<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>
<table border="2" cellspacing="2" cellpadding="10">
  <tr>
    <td>ID</td>
    <td>Previous Notices</td>
    <td>Date</td>
  </tr>

<?php
$mysqli = new mysqli( "localhost", "root", "", "notices"); 
$query = "SELECT * FROM coridor";
if ($result = $mysqli->query($query)) {
    while ($data = $result->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $data['ID']; ?></td>
    <td><?php echo $data['coridor_notice']; ?></td>
    <td><?php echo $data['date']; ?></td> 
  </tr>	
<?php
}}
?>
</table>

</body>
</html>