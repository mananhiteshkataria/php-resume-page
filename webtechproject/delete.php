<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
    <link rel="stylesheet"href="homestyle.css">
</head>
  
<body>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "phpproject";
$conn = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));

    $id=$_REQUEST['id'];



  
// Performing insert query execution
// here our table name is college
$sql = "DELETE FROM tbl_contact WHERE id='$id';";
  
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

    echo "success";
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

header('location:adminpage.php');
?>
</center>
</body>

</html>