<!DOCTYPE html>
<html>

<body>

    <?php
    $array = [1];
    for ($i = 1; $i < 10; $i++) {
        $array[$i] = $array[$i - 1] * 2;
    }

    ?>



</body>

</html>