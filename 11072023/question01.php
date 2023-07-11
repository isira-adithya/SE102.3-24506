<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 6;
        $y = 4;

        echo "Using PHP: <br>";
        echo "<p>Sum: <b>$($x+$y)</b></p>";
        echo "<p>Difference: <b>$($x-$y)</b></p>";
        echo "<p>Product: <b>$($x*$y)</b></p>";
        echo "<p>Division: <b>$($x/$y)</b></p>";
    ?>
    <br>
    <script>
        var x = 6;
        var y = 4;


        document.write(`
        Using Javascript: <br>
        <p>Sum: <b>${x+y}</b></p>
        <p>Difference: <b>${x-y}</b></p>
        <p>Product: <b>${x*y}</b></p>
        <p>Division: <b>${x/y}</b></p>
        `)
    </script>
    <h3>Priting from 5 to 15</h3>
    <?php
        for ($i=5; $i <= 15; $i++) { 
            echo "$i<br>";
        }
    ?>
</body>
</html>