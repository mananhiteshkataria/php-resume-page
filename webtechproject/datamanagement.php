<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>


<html>
<h1>WELCOME</h1>
<a href="logout.php">logout</a>
</html>

<?php
//connect mysql database
$host = "localhost";
$user = "root";
$pass = "";
$db = "phpproject";
$con = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));

// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload View & Download file in PHP and MySQL | Demo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <style>
        table,tr,th,thead,td{
            border: 1px solid black;

        }
    </style>
<body>
<br/>
<section>
    <div>
        <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <legend>Select File to Upload:</legend>
            <div>
                <input type="file" name="file1" />
            </div>
            <div>
                <input type="submit" name="submit" value="Upload"/>
            </div>
            <?php if(isset($_GET['st'])) { ?>
                <div>
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>
        </form>
        </div>
    </div>
</section>
    <section>
    <div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><a href="document/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="document/<?php echo $row['filename']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>