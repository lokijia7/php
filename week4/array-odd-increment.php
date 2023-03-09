<!DOCTYPE html>
<html>

<body>

    <?php
    $odd_numbers = array();  // Create an empty array to store the odd numbers

    for ($i = 1; $i <= 100; $i += 2) {  // Loop through the odd numbers from 1 to 100
        $index = ($i + 1) / 2;  // Calculate the index of the current element in the array
        $odd_numbers[$index] = $i;  // Add the current odd number to the array at the calculated index
    }

    foreach ($odd_numbers as $index => $value) {  // Loop through the array and display each element as specified
        echo "{$index}st element - {$value}\n";  // Display the index and value of each element
        echo "<br>";
    }


    ?>



</body>

</html>