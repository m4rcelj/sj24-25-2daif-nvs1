<html lang="en">

<head>
    <style>

    </style>
</head>

<body>
    <?php
    for ($x = 1; $x <= 1155; $x++) {
        if ($x % 3 == 0) {
            echo "Fizz";
        }
        if ($x % 5 == 0) {
            echo "Buzz";
        }
        if ($x % 7 == 0) {
            echo "Whizz";
        }
        if ($x % 11 == 0) {
            echo "Bang";
        }
        if($x % 3 !== 0 && $x % 5 !== 0 &&$x % 11 !== 0 &&$x % 7 !== 0){
            echo $x;
        }
        echo "<br>";
    }
    ?>
</body>

</html>