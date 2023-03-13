<!DOCTYPE html>
<html>

<body>

    <?php
    $arr = array();
    $num = 1;
    for ($i = 1; $i <= 10; $i++) {
        $arr[] = $doublenum;
        $num *= $doublenum;
    }

    foreach ($arr as $key => $value) {
        echo ($key + 1) . "st element - " .  $value . "<br>";
    }
    ?>



</body>

</html>