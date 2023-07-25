<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_servername = "localhost";
    $_username = "root";
    $_password = "";
    $_dbname = "nsbm";
    $conn = new mysqli($_servername, $_username, $_password, $_dbname);

    $useruname = $_POST['username'];
    $sql = "DELETE FROM users WHERE username='$useruname'";

    if ($conn->query($sql) == TRUE) {
        echo "Record Deleted successfully<br><a href=\"index.php\">Go Back</a>";
    } else {
        echo "Something went wrong.";
    };
}

?>