<?php
$_servername = "localhost";
$_username = "root";
$_password = "";
$_dbname = "nsbm";
$conn = new mysqli($_servername, $_username, $_password, $_dbname);

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                foreach ($users as $user){
                    echo "<tr><td>" . $user[0] . "</td><td>" . $user[1] . "</td><td>" . $user[2] . "</td><td>" . $user[3] . "</td></tr>";
                }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <a href="insertuser.php">Add Users</a>
</body>

</html>