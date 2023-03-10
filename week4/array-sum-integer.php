<!DOCTYPE html>
<html>

<body>

    <?php
    $elements = array(34, 56.3, "Total", True, 365, 34.78, 99, 84, 3.3);
    $sum = 0;

    foreach ($elements as $element) {
        if (is_int($element)) { // check if element is integer
            $sum += $element;
        }
    }

    echo "Total sum of integer numbers: " . $sum;
    ?>




</body>

</html>