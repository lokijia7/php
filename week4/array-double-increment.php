<!DOCTYPE html>
<html>

<body>

    <?php

    $arr = array(1);
    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = $arr[$i - 1] * 2;
    }

    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . "<br>";
    }





    ?>



</body>

</html>