 <?php
$servername = "10.69.8.55";
$username = "bouchra";
$password = "bouchra";
$dbname = "stageprod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM stagiaire WHERE 'id'=3";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>


