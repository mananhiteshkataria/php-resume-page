<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <style>
       
        table,tr,th,thead,td{
            border: 1px solid black;

        }
    
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Contact Details</h2><br><br><br>
                    </div>
                    <?php
                    // Include config file
                    
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>

<?php
$con = mysqli_connect('localhost','root','','phpproject');

if($con){
    echo"connection success";
}
else{
    echo"fail";
}

                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM tbl_contact";
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Subject</th>";
                                        echo "<th>Message</th>";
                                        echo "<th>Operations</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['subject'] . "</td>";
                                        echo "<td>" . $row['message'] . "</td>";

                                        echo "<td>";
                                            echo '<a href="update.php" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span>Update Record</a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash">Delete record</span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($con);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

<html>
<h1>WELCOME</h1>
<a href="datamanagement.php">View File Inserted </a> <br>
<a href="logout.php">logout</a>
</html>