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

    foreach ($odds as $key => $value) {
        echo ($key + 1) . "st element - " . $value . "<br>";
    }



    ?>



</body>

</html>