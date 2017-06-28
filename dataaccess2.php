<!DOCTYPE html>
<html>
<body>

<h1> Table </h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `table 3`  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Username: ". $row["Username"]. " Name: ". $row["Name"]. "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?> 

</body>
</html>