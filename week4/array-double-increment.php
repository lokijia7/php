<!DOCTYPE html>
<html>

<body>

    <?php
    $arr = array(1);

    for ($i = 1; $i < 10; $i++) {
        $arr[] = $arr[$i - 1] * 2;
    }

    foreach ($arr as $key => $value) {
        echo ($key + 1) . "st element - " .  $value . "<br>";
    }
    ?>



</body>

</html>