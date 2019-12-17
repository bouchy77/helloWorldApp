 <?php
$servername = "localhost";
$username = "root";
$password = "test";
$dbname = "stage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO stagiaire (id,nom,prenom) VALUES ('', 'xx','yy')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
