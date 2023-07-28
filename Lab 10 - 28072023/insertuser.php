<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_servername = "localhost";
    $_username = "root";
    $_password = "";
    $_dbname = "nsbm";
    $conn = new mysqli($_servername, $_username, $_password, $_dbname);

    $userid = $_POST['id'];
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $userpass = $_POST['password'];
    $sql = "INSERT INTO students(id, name, email, password) values ('$userid', '$username', '$useremail', '$userpass')";

    if ($conn->query($sql) == TRUE) {
        echo "Record Added successfully<br><a href=\"insertuser.php\">Go Back</a>";
        exit();
    } else {
        echo "Something went wrong.";
    };
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
</head>
<body>
    <h3>Add new user</h3>
    <form action="insertuser.php" method="post">
        <label for="">ID</label>
        <input type="text" name="id"> <br>
        <label for="">Email</label>
        <input type="email" name="email"> <br>
        <label for="">Name</label>
        <input type="text" name="name"> <br>
        <label for="">Password</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="Save">
    </form>
    <br>
    <br>
    <a href="viewusers.php">View Users</a>
</body>
</html>