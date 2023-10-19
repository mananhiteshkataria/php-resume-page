<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "phpproject";
$conn = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));


    $name = $_REQUEST['uname'];
    $email =  $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];



  
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO tbl_contact (name,email,subject,message) VALUES ( '$name','$email','$subject','$message')";
  
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

        echo"<script>";
        echo"alert('successful')";
        echo"<script>";
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);


header('location:index.php');
?>
</center>
</body>

</html>