<?php
session_start();

$con = mysqli_connect('localhost','root','','phpproject');

if($con){
    echo"connection success";
}
else{
    echo"fail";
}
if(isset($_POST['submit']))
{
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $sql="select * from admintable where user ='$username' and
     pass='$password'";
$query=mysqli_query($con,$sql);

     $row=mysqli_num_rows($query);
     
         if($row==1){
             echo "login success";
             $_SESSION['user']=$username;
             header('location:adminpage.php');
         }
         else{
                echo"login failed";
                header('location:login.php');
         }
     
}
else{
    echo"fail";
}
?>
