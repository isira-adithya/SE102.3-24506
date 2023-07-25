<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_servername = "localhost";
    $_username = "root";
    $_password = "";
    $_dbname = "nsbm";
    $conn = new mysqli($_servername, $_username, $_password, $_dbname);

    $useruname = $_POST['username'];
    $userpass = $_POST['password'];
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $sql = "INSERT INTO users(username, email, name, password) values ('$useruname', '$useremail', '$username', '$userpass')";

    if ($conn->query($sql) == TRUE) {
        echo "Record Added successfully<br><a href=\"index.php\">Go Back</a>";
    } else {
        echo "Something went wrong.";
    };
}

?>