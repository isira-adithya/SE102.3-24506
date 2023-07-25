<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_servername = "localhost";
    $_username = "root";
    $_password = "";
    $_dbname = "nsbm";
    $conn = new mysqli($_servername, $_username, $_password, $_dbname);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user == null){
        echo "There is no existing user record with that username.<br><a href=\"index.php\">Go Back</a>";
        exit();
    } else {
        if($user['password'] == $password){
            echo "Success!";
        } else {
            echo "Invalid Credentials!";
        }
    }
}

?>