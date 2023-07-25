<?php

$_servername = "localhost";
$_username = "root";
$_password = "";
$_dbname = "nsbm";
$conn = new mysqli($_servername, $_username, $_password, $_dbname);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $useruname = $_GET['username'];
    $userpass = $_POST['password'];
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $sql = "UPDATE users SET  email='$useremail', name='$username', password='$userpass' WHERE username='$useruname'";

    if ($conn->query($sql) == TRUE) {
        echo "Record Updated successfully<br><a href=\"index.php\">Go Back</a>";
    } else {
        echo "Something went wrong.";
    };
    exit();
} else {
    $username = $_GET['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user == null){
        echo "There is no existing user record with that username.<br><a href=\"index.php\">Go Back</a>";
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
</head>

<body>
    <form action="updateuser.php?username=<?php echo $user['username']; ?>" method="post">
        <label for="">Username <i>(You cannot edit this)</i></label>
        <input type="text" name="username" disabled value="<?php echo $user['username']; ?>"> <br>
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>"> <br>
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>"> <br>
        <label for="">Password</label>
        <input type="password" name="password" value="<?php echo $user['password']; ?>"> <br>
        <input type="submit" value="Save">
    </form>
</body>

</html>