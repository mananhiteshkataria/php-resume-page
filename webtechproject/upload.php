<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "phpproject";
$con = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));
//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from tbl_files';
            $result = mysqli_query($con, $sql);
            print_r($result);
            if (is_countable($result) && count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'document/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tbl_files(filename, created) VALUES('$filename', '$created')";
            mysqli_query($con, $sql);
            header("Location: adminpage.php?st=success");
        }
        else
        {
            header("Location: adminpage.php?st=error");
        }
    }
    else
        header("Location: adminpage.php");
}
?>