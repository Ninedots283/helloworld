<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shree Laxmi Auto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>  
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  
  html,body{
  	width:100%;
	height:100%;
  }
 
  
  .card{
  	background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url("http://i.imgur.com/TnNwdvV.png");
	color:#fff;
	margin:auto;
	width:300px;
	height:300px;
	margin-top:10px;
	text-align:center;
    padding:10px;
	border-radius:15px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  
 .card:hover{
 	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.23);
 }
  
  .card  .team_name{
  color:#fff;
  width:250px;
  margin:auto;
  margin-bottom:20px;
  font-size: 33px;
  border-bottom:1px solid #fff;
  }
  
  .card  .quotes{
  color:#fff;
  width:200px;
  margin:auto;
  margin-bottom:1px;
  font-size: 21px;
  font-family:lato;
  }
  
  .innerclass{
  
  }
  #counter{
  	 margin-top: 4px;
    font-size: 23px;
    border-bottom: 1px solid #fff;
  }

  table{
  	width:60%;
	margin:auto;
	margin-top:20px;
	color:#fff;
  }
  
  th{
  	background-color:#009688;
	padding:10px;
	text-align:center;
	border:1px solid #fff;
	width:50%;
  }
  
  td{
  	padding:10px;
	text-align:center;
	border:1px solid #fff;
	width:50%;
	color:#212121;
  }
  
  tr:nth-child(even){
  	background-color:#B2DFDB;
	padding:10px;
	text-align:center;
	color:#212121
	border:1px solid #fff;
  }
</style>

</head> 

<body>
<h3>PrototypeONe umesh Check</h3>
<?php
$servername = "localhost";
$username = "nisha_saudagar";
$password = "Nisha@123";
$dbname = "Nisha@123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<center><table border=1>";
echo "<th>Id</th>";
echo "<th>PrototypeOne Check</th>";
echo "<th>Password</th>";
echo "<th>MobileNumber</th>";

$sql = "SELECT * FROM SocialMedia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. " </td><td>" . $row["username"]. " </td><td>" . $row["password"]. "</td><td>". $row["mobilenumber"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table></center>";

$conn->close();
?>
<h3>PrototypeOne Body Check</h3>
</body>
</html>
