<!DOCTYPE html>
<html>

<body>

    <?php
    $t = date("Y");

    if ($t > "2020") {
        echo "Have a good year!";
    } else {
        echo "Had a good year!";
    }
    echo date("y/m/d")
    ?>

</body>

</html>