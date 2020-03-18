<?php
$databaseHost='localhost';
$databaseName='attendance';
$databaseUsername='root';
$databasePassword='';
$conn=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if($conn->connect_error){
    die("failed".$conn->connect_error);
}
$username=$_POST['rollno'];
$pword=$_POST['pwd'];
$result=mysqli_query($conn,"select * from student where rollno='$username' and pwd='$pword'") or die("Failed to query database".mysqli_error($conn));
$row=mysqli_fetch_array($result);
if($row['rollno'] == $username && $row['pwd'] == $pword)
{
    header('Location: stuhome.php');
}
else
{
    echo "Your username and password is incorrect";    
}
?>