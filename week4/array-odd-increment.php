$odd_numbers = array(); // Create an empty array to store the odd numbers

for ($i = 1; $i <= 100; $i++) { // Loop through the numbers from 1 to 100 if ($i % 2 !==0) { // If the number is odd array_push($odd_numbers, $i); // Add it to the array } } print_r($odd_numbers); // Print the array of odd numbers