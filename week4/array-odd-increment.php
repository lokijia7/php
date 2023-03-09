<!DOCTYPE html>
<html>

<body>

    <?php
    $odd_numbers = array();

    for ($i = 1; $i <= 100; $i += 2) {
        $index = ($i + 1) / 2;
        $odd_numbers[$index] = $i;
    }

    foreach ($odd_numbers as $index => $value) {
        echo "{$index}st element - {$value}\n";
        echo "<br>";
    }


    ?>



</body>

</html>