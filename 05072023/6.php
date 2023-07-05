<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Received Data</h4>
    <?php 
        if (isset($_GET["userid"]) && isset($_GET["username"]) && isset($_GET["status"])){
            echo "userid:" . $_GET["userid"] . "<br>";
            echo "username:" . $_GET["username"] . "<br>";
            echo "status:" . $_GET["status"] . "<br>";
        }
        
    ?>

</body>
</html>