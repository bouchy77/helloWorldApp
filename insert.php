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


$Xnom=$_POST['nom'];
$Xprenom=$_POST['prenom'];



$sql = "INSERT INTO stagiaire (nom,prenom) VALUES ('$Xnom', '$Xprenom')";
echo $sql;
//$sql="INSERT INTO stagiaire SET $nom, $prenom ;";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>



 



 





