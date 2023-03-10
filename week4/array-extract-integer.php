<!DOCTYPE html>
<html>

<body>

    <?php
    $array = array(34, 56.3, "Total", true, 365, 34.78, 99, 84, 3.3);
    $int_array = array();

    foreach ($array as $element) {
        if (is_int($element)) {
            $int_array[] = $element;
        }
    }

    print_r($int_array);

    ?>



</body>

</html>