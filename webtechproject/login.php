<!DOCTYPE html>
<html>
<head>
<style>
        table,tr,th,thead,td{
            border: 1px solid black;

        }
</style>        
<title>Admin Login</title>
</head>
<body>
        <center>
          <h1> ADMIN LOGIN PAGE </h1>
        <table>
        <form action="logincheck.php" method="POST">
        <tr></tr>
        <td>
                <label> USER</label>
                <input type="text" name="user" value="">
        </td>
        <tr></tr>
        <td>
        <label> Password </label>
        <input type="password" name="pass" value="">
        </td>
        <tr></tr>
        <td>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
        </td>
        </form>
        </table>
        </center>
</body>
</html>