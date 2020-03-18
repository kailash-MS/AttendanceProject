<?php
$databaseHost='localhost';
$databaseName='attendance';
$databaseUsername='root';
$databasePassword='';
$conn=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if($conn->connect_error){
    die("failed".$conn->connect_error);
}
$username=$_POST['loginid'];
$pword=$_POST['pw'];
$result=mysqli_query($conn,"select * from faculty where id='$username' and password='$pword'") or die("Failed to query database".mysqli_error($conn));
$row=mysqli_fetch_array($result);
if($row['id'] == $username && $row['password'] == $pword)
{
    header('Location: facuhome.php');
}
else
{
    echo "Your username and password is incorrect";    
}
?>