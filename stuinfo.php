<?php
$databaseHost='localhost';
$databaseName='attendance';
$databaseUsername='root';
$databasePassword='';
$conn=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!($conn)){
	echo "not connected";
}
else{

$rn=$_POST['nme'];

$sc=$_POST['scode'];

$cc=$_POST['ccode'];

$pa=$_POST['attdr'];

$batch=$_POST['batch'];

$sql = "INSERT INTO info (rollno, subcode, syscode, pres, batch) VALUES ($rn, '$sc', $cc, '$pa', '$batch')";

if ($conn->query($sql) === TRUE) {
    header('Location: end.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




}