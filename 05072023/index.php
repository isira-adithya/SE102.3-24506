<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Js Arrays</title>
</head>
<body>

    <?php
        $names = array("A", "B", "C");
        $marks = array(80, 70, 90);

        for ($i=0; $i < 3; $i++) { 
            echo "<h3>" + $names[$i] + " : <i>" + $marks[$i] + "</i></h3>";
        }
    ?>
</body>
</html>