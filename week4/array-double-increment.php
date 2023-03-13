<!DOCTYPE html>
<html>

<body>

    <?php
    $arr = array(1);
    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = $arr[$i - 1] * 2;
    }

    for ($i = 0; $i < 10; $i++) {
        echo ($i + 1) . "st element - " .  $arr[$i] . "<br>";
    }
    ?>



</body>

</html>