<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Js Arrays</title>
</head>

<body>

    <?php
    $names = array("A", "B", "C", "D");
    $marks = array(80, 70, 90, 45);

    echo "<h2>Using array_map Function</h2>";
    function printMarks($name, $mark)
    {
        echo "<h4> $name : <i>$mark</i></h4>";
    }
    array_map("printMarks", $names, $marks);

    echo "<h2>Using for-loop Function</h2>";
    for ($i = 0; $i < count($names); $i++) {
        echo "<h3> $names[$i] : <i>$marks[$i]</i></h3>";
    }

    echo "<h2>Names</h2><ol>";
    foreach ($names as $name) {
        echo "<li><b>$name</b></li>";
    }
    echo "</ol>";

    function getResult($mark){
        if ($mark >= 90){
            return "Distinct";
        } else if ($mark >= 70) {
            return "Credits";
        } else {
            return "Simple Pass";
        }
    }
    echo "<h2>Results</h2>";
    for ($i = 0; $i < count($names); $i++) {
        echo "<h3> $names[$i] : <i>$marks[$i] : " . getResult($marks[$i]) . "</i></h3>";
    }

    ?>
</body>

</html>