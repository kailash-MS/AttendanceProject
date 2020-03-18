<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
            body
            {
                background-color:lightgrey;
            }
        </style>
    </head>
<body>
<?php
$databaseHost='localhost';
$databaseName='attendance';
$databaseUsername='root';
$databasePassword='';
$conn=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if($conn->connect_error){
    die("failed".$conn->connect_error);
}
$scode=$_POST['rn'];
$sql = "select * from info where subcode='$scode'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "<br> rollno: ". $row["rollno"]. "<br>System no: ". $row["syscode"]."<br> Batch no:" . $row["batch"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?><br>
<a href="Home.html" class="btn btn-info" role="button">Logout</a><br>
</body>
</html>