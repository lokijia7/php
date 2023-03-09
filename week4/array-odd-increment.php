<!DOCTYPE html>
<html>

<body>

    <?php

    $odd_nums = array();

    for ($i = 1; $i <= 100; $i++) {

        if ($i % 2 != 0) {

            $odd_nums[] = $i;
        }
    }

    for ($i = 0; $i < count($odd_nums); $i++) {
        echo ($i + 1) . "st element - " . $odd_nums[$i] . "<br>";
    }



    ?>



</body>

</html>