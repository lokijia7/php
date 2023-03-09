<!DOCTYPE html>
<html>

<body>

    <?php
    // initialize an empty array to store the odd numbers
    $odd_nums = array();

    // use a for loop to iterate over the range of numbers from 1 to 100
    for ($i = 1; $i <= 100; $i++) {
        // check if the current number is odd
        if ($i % 2 != 0) {
            // if it is, add it to the $odd_nums array
            $odd_nums[] = $i;
        }
    }

    // use a for loop to iterate over the odd_nums array and display its elements with the desired format
    for ($i = 0; $i < count($odd_nums); $i++) {
        echo ($i + 1) . "st element - " . $odd_nums[$i] . "<br>";
    }



    ?>



</body>

</html>