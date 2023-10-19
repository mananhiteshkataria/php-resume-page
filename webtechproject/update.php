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
    <center>
<div class="column right">
                    <div class="text">Message me</div>
                    <form action="update.php" method="POST">
                        <div class="fields">
                        <div class="field name">
                                <input type="text" name="id" placeholder="ID required">
                            </div>
                            <div class="field name">
                                <input type="text" name="uname" placeholder="Name required">
                            </div>
                            <div class="field email">
                                <input type="email" name ="email" placeholder="Email required">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name= "subject" placeholder="Subject required">
                        </div>
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Message required"></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
</center>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "phpproject";
$conn = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));

    $id=$_REQUEST['id'];
    $name = $_REQUEST['uname'];
    $email =  $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];



  
// Performing insert query execution
// here our table name is college
$sql = "UPDATE tbl_contact
SET name='$name',email='$email',subject='$subject',message='$message'
WHERE id='$id';
";
  
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

echo "<br><a href='".'adminpage.php'."'>Admin Page </a><br>";
?>
</center>
</body>

</html>