<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Reservation Details</title>

<style>
body {
	background: url('./images/3.jpg') no-repeat center;
	background-size: cover;
}
table {
border-collapse: collapse;
width: 100%;
color: 	#333533;
font-family: 'Secular One', sans-serif;
font-size: 25px;
text-align: left;
}
th {
background-color:	#333533;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<h1 style="text-align: center;"><?php echo $_SESSION['name']; ?><a style="font-size: 16px; color: #f9b703;" href="logout.php">[Logout}</a></h1>

    
     <h2 style="text-align: center;">Reservations</h2>
<table style=" box-shadow: 0 15px 25px rgba(0,0,0,0.5); ">
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Date</th>
<th>Numberofpeople</th>
<th>Branchname</th>
<th>Message</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "reservation");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Name, Email, Phone, Date, Numberofpeople, Branchname, Message FROM info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Email"] . "</td><td>". $row["Phone"]. "</td><td>". $row["Date"]. "</td><td>"
. $row["Numberofpeople"]. "</td><td>". $row["Branchname"]. "</td><td>". $row["Message"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
<?php 
}else{
     header("Location: userlogin.php");
     exit();
}
 ?>