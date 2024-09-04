<?php
//✅Coding challenge #1. Coding challenge #1: Print numbers from 1 to 10

// Loop from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    // Print the current value of $i
    echo $i . "\n";
}

//✅Coding challenge #2. Coding challenge #2: Print the odd numbers less than 100

// Loop from 1 to 99
for ($i = 1; $i < 100; $i += 2) {
    // Print the current value of $i
    echo $i . "\n";
}

// ✅Coding challenge #3: Print the multiplication table with 7
// Loop from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    // Calculate the product of 7 and the current value of $i
    $product = 7 * $i;

    // Print the multiplication result in a readable format
    echo "7 x $i = $product\n";
}

//✅ Coding challenge #4: Print all the multiplication tables with numbers from 1 to 10

// Outer loop for numbers 1 to 10
for ($i = 1; $i <= 10; $i++) {
    // Print the header for the current multiplication table
    echo "Multiplication Table for $i\n";

    // Inner loop for multiplying $i by numbers 1 to 10
    for ($j = 1; $j <= 10; $j++) {
        // Calculate the product of $i and $j
        $product = $i * $j;

        // Print the multiplication result
        echo "$i x $j = $product\n";
    }

    // Print a blank line for spacing between tables
    echo "\n";
}

// Pseudo Code
/*
START

FOR i FROM 1 TO 10 DO
PRINT "Multiplication Table for i"

FOR j FROM 1 TO 10 DO
SET product TO i * j
PRINT "i x j = product"
END FOR

PRINT a blank line for spacing
END FOR

END
*/


// ✅Coding challenge #5: Calculate the sum of numbers from 1 to 10
// Initialize a variable to store the sum
$sum = 0;

// Loop through numbers from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    // Add the current number to the sum
    $sum += $i;
}

// Print the total sum
echo "The sum of numbers from 1 to 10 is: $sum\n";

// Psuedo Code

/*
START

SET sum TO 0

FOR i FROM 1 TO 10 DO
    SET sum TO sum + i
END FOR

PRINT "The sum of numbers from 1 to 10 is: sum"

END


*/ 

// ✅Coding challenge #6: Calculate 10!

// Initialize a variable to store the factorial
$factorial = 1;

// Loop through numbers from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    // Multiply the current factorial by the current number
    $factorial *= $i;
}

// Print the factorial of 10
echo "10! = $factorial\n";

// Psuedo Code

/*
START

SET factorial TO 1

FOR i FROM 1 TO 10 DO
    SET factorial TO factorial * i
END FOR

PRINT "10! = factorial"

END


*/

//✅ Coding challenge #7: Calculate the sum of odd numbers greater than 10 and less than 30

// Initialize a variable to store the sum
$sum = 0;

// Loop through numbers greater than 10 and less than 30
for ($i = 11; $i < 30; $i += 2) {
    // Add the current odd number to the sum
    $sum += $i;
}

// Print the total sum
echo "The sum of odd numbers greater than 10 and less than 30 is: $sum\n";

// Psuedo Code

/*
START

SET sum TO 0

FOR i FROM 11 TO 29 STEP 2 DO
    SET sum TO sum + i
END FOR

PRINT "The sum of odd numbers greater than 10 and less than 30 is: sum"

END



*/

// Coding challenge #8: Create a function that will convert from Celsius to Fahrenheit

// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius)
{
    // Apply the conversion formula
    $fahrenheit = ($celsius * 9 / 5) + 32;

    // Return the converted value
    return $fahrenheit;
}

// Example usage
$celsius = 25;
$fahrenheit = celsiusToFahrenheit($celsius);
echo "$celsius°C is equal to $fahrenheit°F\n";


// Psuedo Code

/*
START

FUNCTION celsiusToFahrenheit(celsius)
    SET fahrenheit TO (celsius * 9/5) + 32
    RETURN fahrenheit
END FUNCTION

SET celsius TO 25
SET fahrenheit TO celsiusToFahrenheit(celsius)
PRINT "celsius°C is equal to fahrenheit°F"

END


*/

//✅ Coding challenge #9: Create a function that will convert from Fahrenheit to Celsius


// Function to convert Fahrenheit to Celsius
function fahrenheitToCelsius($fahrenheit)
{
    // Apply the conversion formula
    $celsius = ($fahrenheit - 32) * 5 / 9;

    // Return the converted value
    return $celsius;
}

// Example usage
$fahrenheit = 77;
$celsius = fahrenheitToCelsius($fahrenheit);
echo "$fahrenheit°F is equal to $celsius°C\n";

// Psuedo Code

/*
START

FUNCTION fahrenheitToCelsius(fahrenheit)
    SET celsius TO (fahrenheit - 32) * 5/9
    RETURN celsius
END FUNCTION

SET fahrenheit TO 77
SET celsius TO fahrenheitToCelsius(fahrenheit)
PRINT "fahrenheit°F is equal to celsius°C"

END

*/

// ✅Coding challenge #10: Calculate the sum of numbers in an array of numbers

// Function to calculate the sum of numbers in an array
function sumArray($numbers)
{
    // Initialize a variable to store the sum
    $sum = 0;

    // Loop through each number in the array
    foreach ($numbers as $number) {
        // Add the current number to the sum
        $sum += $number;
    }

    // Return the total sum
    return $sum;
}

// Example usage
$numbers = [1, 2, 3, 4, 5];
$sum = sumArray($numbers);
echo "The sum of the numbers in the array is: $sum\n";

// Psuedo Code

/*
START

FUNCTION sumArray(numbers)
    SET sum TO 0
    
    FOR EACH number IN numbers DO
        SET sum TO sum + number
    END FOR
    
    RETURN sum
END FUNCTION

SET numbers TO [1, 2, 3, 4, 5]
SET sum TO sumArray(numbers)
PRINT "The sum of the numbers in the array is: sum"

END


*/


//✅ Coding challenge #11: Calculate the average of the numbers in an array of numbers

// Function to calculate the average of numbers in an array

function averageArray($numbers)
{
    // Initialize a variable to store the sum
    $sum = 0;

    // Calculate the sum of the numbers in the array
    foreach ($numbers as $number) {
        $sum += $number;
    }

    // Calculate the average
    $count = count($numbers);
    $average = $count > 0 ? $sum / $count : 0; // Handle division by zero

    // Return the average
    return $average;
}

// Example usage
$numbers = [1, 2, 3, 4, 5];
$average = averageArray($numbers);
echo "The average of the numbers in the array is: $average\n";

// Psuedo Code

/*
START

FUNCTION averageArray(numbers)
    SET sum TO 0
    
    FOR EACH number IN numbers DO
        SET sum TO sum + number
    END FOR
    
    SET count TO the number of elements in numbers
    IF count > 0 THEN
        SET average TO sum / count
    ELSE
        SET average TO 0
    END IF
    
    RETURN average
END FUNCTION

SET numbers TO [1, 2, 3, 4, 5]
SET average TO averageArray(numbers)
PRINT "The average of the numbers in the array is: average"

END


*/

// ✅Coding challenge #12: Create a function that receives an array of numbers and returns an array containing only the positive numbers

// Function to filter out only positive numbers from an array
function filterPositiveNumbers($numbers)
{
    // Initialize an empty array to store positive numbers
    $positiveNumbers = [];

    // Loop through each number in the input array
    foreach ($numbers as $number) {
        // Check if the number is positive
        if ($number > 0) {
            // Add the positive number to the result array
            $positiveNumbers[] = $number;
        }
    }

    // Return the array of positive numbers
    return $positiveNumbers;
}

// Example usage
$numbers = [-5, 3, -1, 7, 0, 4];
$positiveNumbers = filterPositiveNumbers($numbers);
print_r($positiveNumbers);

// Psuedo Code

/*
START

FUNCTION filterPositiveNumbers(numbers)
    SET positiveNumbers TO an empty array
    
    FOR EACH number IN numbers DO
        IF number > 0 THEN
            ADD number TO positiveNumbers
        END IF
    END FOR
    
    RETURN positiveNumbers
END FUNCTION

SET numbers TO [-5, 3, -1, 7, 0, 4]
SET positiveNumbers TO filterPositiveNumbers(numbers)
PRINT positiveNumbers

END

*/






//✅ Coding challenge #13: Print the first 10 Fibonacci numbers without recursion

// Function to print the first n Fibonacci numbers
function printFibonacci($n)
{
    // Initialize the first two Fibonacci numbers
    $a = 0;
    $b = 1;

    // Print the first Fibonacci number
    echo $a . "\n";

    // Print the remaining Fibonacci numbers
    for ($i = 1; $i < $n; $i++) {
        // Calculate the next Fibonacci number
        $next = $a + $b;

        // Print the next Fibonacci number
        echo $next . "\n";

        // Update $a and $b for the next iteration
        $a = $b;
        $b = $next;
    }
}

// Print the first 10 Fibonacci numbers
printFibonacci(10);

// Psuedo Code

/*
START

FUNCTION printFibonacci(n)
    SET a TO 0
    SET b TO 1
    
    PRINT a
    
    FOR i FROM 1 TO n-1 DO
        SET next TO a + b
        PRINT next
        SET a TO b
        SET b TO next
    END FOR
END FUNCTION

CALL printFibonacci(10)

END


*/

// ✅Coding challenge #14: Create a function that will find the nth Fibonacci number using recursion

// Recursive function to find the nth Fibonacci number
function fibonacci($n)
{
    // Base cases
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }

    // Recursive case
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Example usage
$n = 10;
$result = fibonacci($n);
echo "The Fibonacci number at position $n is: $result\n";

// Psuedo Code

/*
START

FUNCTION fibonacci(n)
    IF n == 0 THEN
        RETURN 0
    ELSE IF n == 1 THEN
        RETURN 1
    ELSE
        RETURN fibonacci(n - 1) + fibonacci(n - 2)
    END IF
END FUNCTION

SET n TO 10
SET result TO fibonacci(n)
PRINT "The Fibonacci number at position n is: result"

END


*/

// ✅Coding challenge #15: Create a function that will return a Boolean specifying if a number is prime
/*
// Function to check if a number is prime
function isPrime($number)
{
    // Handle special cases
    if ($number <= 1) {
        return false;
    }
    if ($number <= 3) {
        return true;
    }

    // Eliminate even numbers and multiples of 3
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }

    // Check for factors from 5 to the square root of the number
    $i = 5;
    while ($i * $i <= $number) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }

    // If no factors are found, the number is prime
    return true;
}

// Example usage
$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}

*/ 

// Psuedo Code

/*
START

FUNCTION isPrime(number)
    IF number <= 1 THEN
        RETURN false
    ELSE IF number <= 3 THEN
        RETURN true
    END IF
    
    IF number % 2 == 0 OR number % 3 == 0 THEN
        RETURN false
    END IF
    
    SET i TO 5
    WHILE i * i <= number DO
        IF number % i == 0 OR number % (i + 2) == 0 THEN
            RETURN false
        END IF
        SET i TO i + 6
    END WHILE
    
    RETURN true
END FUNCTION

SET number TO 29
IF isPrime(number) THEN
    PRINT number + " is a prime number."
ELSE
    PRINT number + " is not a prime number."
END IF

END


*/

// ✅Coding challenge #16: Calculate the sum of digits of a positive integer number

// Function to calculate the sum of digits of a positive integer
function sumOfDigits($number)
{
    // Initialize the sum to 0
    $sum = 0;

    // Process each digit of the number
    while ($number > 0) {
        // Add the last digit to the sum
        $sum += $number % 10;

        // Remove the last digit from the number
        $number = (int)($number / 10);
    }

    // Return the sum of the digits
    return $sum;
}

// Example usage
$number = 12345;
$result = sumOfDigits($number);
echo "The sum of the digits of $number is: $result\n";

// Psuedo Code

/*
START

FUNCTION sumOfDigits(number)
    SET sum TO 0
    
    WHILE number > 0 DO
        SET sum TO sum + (number % 10)
        SET number TO number / 10 (using integer division)
    END WHILE
    
    RETURN sum
END FUNCTION

SET number TO 12345
SET result TO sumOfDigits(number)
PRINT "The sum of the digits of number is: result"

END


*/ 

// ✅Coding challenge #17: Print the first 100 prime numbers


/*
// Function to check if a number is prime
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    if ($number <= 3) {
        return true;
    }
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $number) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

// Function to print the first n prime numbers
function printFirstNPrimes($n)
{
    $count = 0;
    $number = 2; // Start checking from the first prime number

    while ($count < $n) {
        if (isPrime($number)) {
            echo $number . "\n";
            $count++;
        }
        $number++;
    }
}

// Print the first 100 prime numbers
printFirstNPrimes(100);


*/ 
// Psuedo Code
/*
START

FUNCTION isPrime(number)
    IF number <= 1 THEN
        RETURN false
    ELSE IF number <= 3 THEN
        RETURN true
    END IF
    
    IF number % 2 == 0 OR number % 3 == 0 THEN
        RETURN false
    END IF
    
    SET i TO 5
    WHILE i * i <= number DO
        IF number % i == 0 OR number % (i + 2) == 0 THEN
            RETURN false
        END IF
        SET i TO i + 6
    END WHILE
    
    RETURN true
END FUNCTION

FUNCTION printFirstNPrimes(n)
    SET count TO 0
    SET number TO 2
    
    WHILE count < n DO
        IF isPrime(number) THEN
            PRINT number
            SET count TO count + 1
        END IF
        SET number TO number + 1
    END WHILE
END FUNCTION

CALL printFirstNPrimes(100)

END


*/

// ✅Coding challenge #18: Create a function that will return in an array the first "nPrimes" prime numbers greater than a particular number "startAt"

/*
// Function to check if a number is prime
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    if ($number <= 3) {
        return true;
    }
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $number) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

// Function to return an array of the first nPrimes prime numbers greater than startAt
function findPrimesGreaterThan($startAt, $nPrimes)
{
    $primes = [];
    $number = $startAt + 1; // Start checking from the next number after startAt

    while (count($primes) < $nPrimes) {
        if (isPrime($number)) {
            $primes[] = $number;
        }
        $number++;
    }

    return $primes;
}

// Example usage
$startAt = 10;
$nPrimes = 5;
$primeNumbers = findPrimesGreaterThan($startAt, $nPrimes);
print_r($primeNumbers);



*/ 
// Psuedo Code

/*
START

FUNCTION isPrime(number)
    IF number <= 1 THEN
        RETURN false
    ELSE IF number <= 3 THEN
        RETURN true
    END IF
    
    IF number % 2 == 0 OR number % 3 == 0 THEN
        RETURN false
    END IF
    
    SET i TO 5
    WHILE i * i <= number DO
        IF number % i == 0 OR number % (i + 2) == 0 THEN
            RETURN false
        END IF
        SET i TO i + 6
    END WHILE
    
    RETURN true
END FUNCTION

FUNCTION findPrimesGreaterThan(startAt, nPrimes)
    SET primes TO an empty array
    SET number TO startAt + 1
    
    WHILE count(primes) < nPrimes DO
        IF isPrime(number) THEN
            ADD number TO primes
        END IF
        SET number TO number + 1
    END WHILE
    
    RETURN primes
END FUNCTION

SET startAt TO 10
SET nPrimes TO 5
SET primeNumbers TO findPrimesGreaterThan(startAt, nPrimes)
PRINT primeNumbers

END


*/

// ✅Coding challenge #19: Rotate an array to the left 1 position

// Function to rotate an array to the left by 1 position
function rotateLeft(array $arr)
{
    // Check if the array is empty or has only one element
    if (count($arr) <= 1) {
        return $arr;
    }

    // Store the first element
    $first = array_shift($arr);

    // Append the first element to the end of the array
    $arr[] = $first;

    return $arr;
}

// Example usage
$array = [1, 2, 3, 4, 5];
$rotatedArray = rotateLeft($array);
print_r($rotatedArray);

// Psuedo Code

/*
START

FUNCTION rotateLeft(arr)
    IF length(arr) <= 1 THEN
        RETURN arr
    END IF
    
    SET first TO remove the first element of arr
    ADD first TO the end of arr
    
    RETURN arr
END FUNCTION

SET array TO [1, 2, 3, 4, 5]
SET rotatedArray TO rotateLeft(array)
PRINT rotatedArray

END



*/


//✅ Coding challenge #20: Create a function that will merge two arrays and return the result as a new array


// Function to merge two arrays
function mergeArrays(array $arr1, array $arr2)
{
    // Merge the two arrays
    $mergedArray = array_merge($arr1, $arr2);

    // Return the merged array
    return $mergedArray;
}

// Example usage
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$mergedArray = mergeArrays($array1, $array2);
print_r($mergedArray);

// Psuedo Code

/*
START

FUNCTION mergeArrays(arr1, arr2)
    SET mergedArray TO merge arr1 and arr2
    RETURN mergedArray
END FUNCTION

SET array1 TO [1, 2, 3]
SET array2 TO [4, 5, 6]
SET mergedArray TO mergeArrays(array1, array2)
PRINT mergedArray

END


*/

// ✅Coding challenge #21: Create a function that will receive two arrays of numbers as arguments and return an array composed of all the numbers that are either in the first array or second array but not in both


// Function to find numbers in either array but not in both
function symmetricDifference(array $arr1, array $arr2)
{
    // Find numbers in the first array but not in the second array
    $diff1 = array_diff($arr1, $arr2);

    // Find numbers in the second array but not in the first array
    $diff2 = array_diff($arr2, $arr1);

    // Merge the results to get the symmetric difference
    $symmetricDiff = array_merge($diff1, $diff2);

    // Return the symmetric difference array
    return $symmetricDiff;
}

// Example usage
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
$result = symmetricDifference($array1, $array2);
print_r($result);

// Psuedo Code

/*
START

FUNCTION symmetricDifference(arr1, arr2)
    SET diff1 TO elements in arr1 but not in arr2
    SET diff2 TO elements in arr2 but not in arr1
    SET symmetricDiff TO merge diff1 and diff2
    RETURN symmetricDiff
END FUNCTION

SET array1 TO [1, 2, 3, 4, 5]
SET array2 TO [4, 5, 6, 7, 8]
SET result TO symmetricDifference(array1, array2)
PRINT result

END


*/

// ✅Coding challenge #22: Create a function that will receive two arrays and will return an array with elements that are in the first array but not in the second


// Function to find elements in the first array but not in the second
function differenceArray(array $arr1, array $arr2)
{
    // Find elements in arr1 that are not in arr2
    $difference = array_diff($arr1, $arr2);

    // Return the result as an array
    return $difference;
}

// Example usage
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
$result = differenceArray($array1, $array2);
print_r($result);

// Psuedo Code

/*
START

FUNCTION differenceArray(arr1, arr2)
    SET difference TO elements in arr1 but not in arr2
    RETURN difference
END FUNCTION

SET array1 TO [1, 2, 3, 4, 5]
SET array2 TO [4, 5, 6, 7, 8]
SET result TO differenceArray(array1, array2)
PRINT result

END


*/

//✅ Coding challenge #23: Create a function that will receive an array of numbers as argument and will return a new array with distinct elements

// Function to return an array with distinct elements
function getDistinctElements(array $arr)
{
    // Use array_unique to filter out duplicate values
    $distinctArray = array_unique($arr);

    // Return the array with distinct elements
    return $distinctArray;
}

// Example usage
$array = [1, 2, 2, 3, 4, 4, 5];
$distinctArray = getDistinctElements($array);
print_r($distinctArray);


// Psuedo Code

/*
START

FUNCTION getDistinctElements(arr)
    SET distinctArray TO remove duplicates from arr using array_unique
    RETURN distinctArray
END FUNCTION

SET array TO [1, 2, 2, 3, 4, 4, 5]
SET distinctArray TO getDistinctElements(array)
PRINT distinctArray

END

*/

// ✅ Coding challenge #24: Calculate the sum of first 100 prime numbers

/*
// Function to check if a number is prime
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Function to calculate the sum of the first 100 prime numbers
function sumOfFirst100Primes()
{
    $sum = 0;
    $count = 0;
    $num = 2; // Start checking from the first prime number

    while ($count < 100) {
        if (isPrime($num)) {
            $sum += $num;
            $count++;
        }
        $num++;
    }

    return $sum;
}

// Example usage
$sumPrimes = sumOfFirst100Primes();
echo "The sum of the first 100 prime numbers is: " . $sumPrimes;


*/ 
// Psuedo Code

/*
START

FUNCTION isPrime(num)
    IF num < 2 THEN
        RETURN false
    END IF
    
    FOR i FROM 2 TO sqrt(num)
        IF num MOD i == 0 THEN
            RETURN false
        END IF
    END FOR
    
    RETURN true
END FUNCTION

FUNCTION sumOfFirst100Primes()
    SET sum TO 0
    SET count TO 0
    SET num TO 2
    
    WHILE count < 100 DO
        IF isPrime(num) THEN
            ADD num TO sum
            INCREMENT count BY 1
        END IF
        INCREMENT num BY 1
    END WHILE
    
    RETURN sum
END FUNCTION

SET sumPrimes TO sumOfFirst100Primes()
PRINT "The sum of the first 100 prime numbers is: " + sumPrimes

END


*/

// ✅Coding challenge #25: Print the distance between the first 100 prime numbers

// Function to check if a number is prime
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Function to print the distances between the first 100 prime numbers
function printDistancesBetweenPrimes()
{
    $primes = [];
    $num = 2; // Start checking from the first prime number

    // Find the first 100 prime numbers
    while (count($primes) < 100) {
        if (isPrime($num)) {
            $primes[] = $num;
        }
        $num++;
    }

    // Calculate and print distances between consecutive primes
    for ($i = 1; $i < count($primes); $i++) {
        $distance = $primes[$i] - $primes[$i - 1];
        echo "Distance between {$primes[$i - 1]} and {$primes[$i]}: $distance\n";
    }
}

// Example usage
printDistancesBetweenPrimes();

// Psuedo Code

/*
START

FUNCTION isPrime(num)
    IF num < 2 THEN
        RETURN false
    END IF
    
    FOR i FROM 2 TO sqrt(num)
        IF num MOD i == 0 THEN
            RETURN false
        END IF
    END FOR
    
    RETURN true
END FUNCTION

FUNCTION printDistancesBetweenPrimes()
    SET primes TO empty list
    SET num TO 2
    
    WHILE length of primes < 100 DO
        IF isPrime(num) THEN
            ADD num TO primes
        END IF
        INCREMENT num BY 1
    END WHILE
    
    FOR i FROM 1 TO length of primes - 1 DO
        SET distance TO primes[i] - primes[i - 1]
        PRINT "Distance between primes[i - 1] and primes[i]: " + distance
    END FOR
END FUNCTION

CALL printDistancesBetweenPrimes()

END


*/


// ✅Coding challenge #26: Create a function that will add two positive numbers of indefinite size. The numbers are received as strings and the result should be also provided as string.

// Function to add two large positive numbers represented as strings
function addLargeNumbers($num1, $num2)
{
    // Ensure num1 is the longer string
    if (strlen($num1) < strlen($num2)) {
        list($num1, $num2) = array($num2, $num1);
    }

    // Reverse the strings to make addition easier from right to left
    $num1 = strrev($num1);
    $num2 = strrev($num2);

    $carry = 0;
    $result = '';

    // Loop through each digit
    for ($i = 0; $i < strlen($num1); $i++) {
        // Get the digit from num1 and num2, if num2 has a digit at that position
        $digit1 = (int)$num1[$i];
        $digit2 = ($i < strlen($num2)) ? (int)$num2[$i] : 0;

        // Add the digits along with any carry
        $sum = $digit1 + $digit2 + $carry;
        $result .= $sum % 10; // Append the single digit result
        $carry = (int)($sum / 10); // Calculate the carry
    }

    // If there is a carry left at the end, append it
    if ($carry > 0) {
        $result .= $carry;
    }

    // Reverse the result back to the original order
    return strrev($result);
}

// Example usage
$num1 = "123456789012345678901234567890";
$num2 = "987654321098765432109876543210";
$sum = addLargeNumbers($num1, $num2);
echo "The sum is: $sum";

// Psuedo Code

/*
START

FUNCTION addLargeNumbers(num1, num2)
    IF length of num1 < length of num2 THEN
        SWAP num1 and num2
    END IF

    REVERSE num1
    REVERSE num2

    SET carry TO 0
    SET result TO empty string

    FOR i FROM 0 TO length of num1 - 1 DO
        SET digit1 TO integer value of num1[i]
        SET digit2 TO integer value of num2[i] if i < length of num2 ELSE 0

        SET sum TO digit1 + digit2 + carry
        APPEND (sum % 10) TO result
        SET carry TO integer division of sum by 10
    END FOR

    IF carry > 0 THEN
        APPEND carry TO result
    END IF

    REVERSE result
    RETURN result
END FUNCTION

SET num1 TO "123456789012345678901234567890"
SET num2 TO "987654321098765432109876543210"
SET sum TO addLargeNumbers(num1, num2)
PRINT "The sum is: " + sum

END


*/


// ✅Coding challenge #27. Create a function that will return the number of words in a text

// Function to count the number of words in a text
function countWords($text)
{
    // Use str_word_count to count the number of words
    $wordCount = str_word_count($text);

    // Return the word count
    return $wordCount;
}

// Example usage
$text = "This is a simple example text with seven words.";
$numberOfWords = countWords($text);
echo "The number of words in the text is: " . $numberOfWords;

// Psuedo Code

/*
START

FUNCTION countWords(text)
    SET wordCount TO the result of counting words in text using str_word_count
    RETURN wordCount
END FUNCTION

SET text TO "This is a simple example text with seven words."
SET numberOfWords TO countWords(text)
PRINT "The number of words in the text is: " + numberOfWords

END


*/
// ✅Coding challenge #28. Create a function that will capitalize the first letter of each word in a text


// Function to capitalize the first letter of each word in a text
function capitalizeFirstLetter($text)
{
    // Use ucwords to capitalize the first letter of each word
    $capitalizedText = ucwords($text);

    // Return the capitalized text
    return $capitalizedText;
}

// Example usage
$text = "this is a simple example text.";
$capitalizedText = capitalizeFirstLetter($text);
echo "Capitalized text: " . $capitalizedText;

// Psuedo Code

/*
START

FUNCTION capitalizeFirstLetter(text)
    SET capitalizedText TO the result of applying ucwords to text
    RETURN capitalizedText
END FUNCTION

SET text TO "this is a simple example text."
SET capitalizedText TO capitalizeFirstLetter(text)
PRINT "Capitalized text: " + capitalizedText

END


*/


// ✅Coding challenge #29. Calculate the sum of numbers received in a comma delimited string

// Function to calculate the sum of numbers in a comma-delimited string
function sumOfCommaDelimitedNumbers($string)
{
    // Split the string into an array of numbers
    $numbers = explode(',', $string);

    // Initialize the sum to 0
    $sum = 0;

    // Loop through the array and add each number to the sum
    foreach ($numbers as $number) {
        $sum += (int)$number;
    }

    // Return the total sum
    return $sum;
}

// Example usage
$commaDelimitedString = "10,20,30,40,50";
$sum = sumOfCommaDelimitedNumbers($commaDelimitedString);
echo "The sum of the numbers is: " . $sum;

// Psuedo Code

/*
START

FUNCTION sumOfCommaDelimitedNumbers(string)
    SET numbers TO result of splitting string by comma
    SET sum TO 0

    FOR EACH number IN numbers DO
        CONVERT number TO integer and ADD it to sum
    END FOR

    RETURN sum
END FUNCTION

SET commaDelimitedString TO "10,20,30,40,50"
SET sum TO sumOfCommaDelimitedNumbers(commaDelimitedString)
PRINT "The sum of the numbers is: " + sum

END


*/

// ✅Coding challenge #30. Create a function that will return an array with words inside a text

// Function to return an array of words from a text
function getWordsArray($text)
{
    // Use str_word_count with the 1 parameter to get an array of words
    $wordsArray = str_word_count($text, 1);

    // Return the array of words
    return $wordsArray;
}

// Example usage
$text = "This is a sample text with several words.";
$words = getWordsArray($text);
print_r($words);


// Psuedo Code

/*
START

FUNCTION getWordsArray(text)
    SET wordsArray TO result of str_word_count(text, 1)
    RETURN wordsArray
END FUNCTION

SET text TO "This is a sample text with several words."
SET words TO getWordsArray(text)
PRINT words array

END


*/



// ✅Coding challenge #31. Create a function to convert a CSV text to a “bi-dimensional” array

// Function to convert CSV text to a bi-dimensional array
function csvToArray($csvText)
{
    // Split the CSV text into lines
    $lines = explode("\n", $csvText);

    // Initialize an empty array to hold the bi-dimensional array
    $array = [];

    // Loop through each line
    foreach ($lines as $line) {
        // Convert the line into an array of values and add it to the main array
        $array[] = str_getcsv($line);
    }

    // Return the bi-dimensional array
    return $array;
}

// Example usage
$csvText = "name,age,city\nJohn,25,New York\nJane,30,Los Angeles\nDoe,22,Chicago";
$array = csvToArray($csvText);
print_r($array);

// Psuedo Code

/*
START

FUNCTION csvToArray(csvText)
    SPLIT csvText by newline character into lines array
    INITIALIZE an empty array to hold the bi-dimensional array
    
    FOR EACH line IN lines DO
        CONVERT line into an array of values using str_getcsv
        ADD the array of values to the main array
    END FOR
    
    RETURN the bi-dimensional array
END FUNCTION

SET csvText TO "name,age,city\nJohn,25,New York\nJane,30,Los Angeles\nDoe,22,Chicago"
SET array TO csvToArray(csvText)
PRINT array

END


*/


// ✅Coding challenge #32. Create a function that converts a string to an array of characters

// Function to convert a string to an array of characters
function stringToArrayOfCharacters($string)
{
    // Use str_split to convert the string to an array of characters
    $charactersArray = str_split($string);

    // Return the array of characters
    return $charactersArray;
}

// Example usage
$string = "Hello, World!";
$characters = stringToArrayOfCharacters($string);
print_r($characters);

// Psuedo Code

/*
START

FUNCTION stringToArrayOfCharacters(string)
    SET charactersArray TO result of splitting string using str_split
    RETURN charactersArray
END FUNCTION

SET string TO "Hello, World!"
SET characters TO stringToArrayOfCharacters(string)
PRINT characters array

END


*/

// ✅Coding challenge #33. Create a function that will convert a string in an array containing the ASCII codes of each character

// Function to convert a string to an array of ASCII codes
function stringToAsciiArray($string)
{
    // Initialize an empty array to hold the ASCII codes
    $asciiArray = [];

    // Loop through each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        // Get the ASCII code of the current character and add it to the array
        $asciiArray[] = ord($string[$i]);
    }

    // Return the array of ASCII codes
    return $asciiArray;
}

// Example usage
$string = "Hello!";
$asciiCodes = stringToAsciiArray($string);
print_r($asciiCodes);

// Psuedo Code

/*
START

FUNCTION stringToAsciiArray(string)
    INITIALIZE an empty array to hold ASCII codes
    
    FOR i FROM 0 TO length of string - 1 DO
        GET the character at position i in the string
        GET the ASCII code of the character using ord function
        ADD the ASCII code to the array
    END FOR
    
    RETURN the array of ASCII codes
END FUNCTION

SET string TO "Hello!"
SET asciiCodes TO stringToAsciiArray(string)
PRINT asciiCodes array

END


*/



//✅ Coding challenge #34. Create a function that will convert an array containing ASCII codes in a string

// Function to convert an array of ASCII codes to a string
function asciiArrayToString($asciiArray)
{
    // Initialize an empty string to hold the result
    $string = '';

    // Loop through each ASCII code in the array
    foreach ($asciiArray as $asciiCode) {
        // Convert the ASCII code to a character and append it to the string
        $string .= chr($asciiCode);
    }

    // Return the resulting string
    return $string;
}

// Example usage
$asciiArray = [72, 101, 108, 108, 111, 33];
$string = asciiArrayToString($asciiArray);
echo "The resulting string is: " . $string;


// Psuedo Code

/*
START

FUNCTION asciiArrayToString(asciiArray)
    INITIALIZE an empty string to hold the result
    
    FOR EACH asciiCode IN asciiArray DO
        CONVERT asciiCode TO a character using chr function
        APPEND the character to the result string
    END FOR
    
    RETURN the resulting string
END FUNCTION

SET asciiArray TO [72, 101, 108, 108, 111, 33]
SET string TO asciiArrayToString(asciiArray)
PRINT "The resulting string is: " + string

END


*/ 



// ✅Coding challenge #35. Implement the Caesar cypher


// Function to encrypt a string using the Caesar cipher
function caesarCipherEncrypt($text, $shift) {
    $result = '';
    $shift = $shift % 26; // Ensure shift is within 0-25 range

    // Loop through each character in the text
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        
        // Encrypt uppercase letters
        if (ctype_upper($char)) {
            $result .= chr((ord($char) + $shift - 65) % 26 + 65);
        }
        // Encrypt lowercase letters
        elseif (ctype_lower($char)) {
            $result .= chr((ord($char) + $shift - 97) % 26 + 97);
        }
        // Non-alphabetical characters remain the same
        else {
            $result .= $char;
        }
    }

    return $result;
}

// Function to decrypt a string using the Caesar cipher
function caesarCipherDecrypt($text, $shift) {
    return caesarCipherEncrypt($text, 26 - ($shift % 26));
}

// Example usage
$plainText = "Hello, World!";
$shift = 3;

$encryptedText = caesarCipherEncrypt($plainText, $shift);
$decryptedText = caesarCipherDecrypt($encryptedText, $shift);

echo "Original text: " . $plainText . "\n";
echo "Encrypted text: " . $encryptedText . "\n";
echo "Decrypted text: " . $decryptedText . "\n";


// Psuedo Code

/*
START

FUNCTION caesarCipherEncrypt(text, shift)
    INITIALIZE an empty string result
    SET shift TO shift modulo 26 (to handle shifts larger than 25)

    FOR EACH character IN text DO
        IF character is an uppercase letter THEN
            CALCULATE encrypted character as (ASCII of character + shift - 65) modulo 26 + 65
            APPEND encrypted character to result
        ELSE IF character is a lowercase letter THEN
            CALCULATE encrypted character as (ASCII of character + shift - 97) modulo 26 + 97
            APPEND encrypted character to result
        ELSE
            APPEND the character to result as is (for non-alphabetical characters)
        END IF
    END FOR

    RETURN result
END FUNCTION

FUNCTION caesarCipherDecrypt(text, shift)
    RETURN result of caesarCipherEncrypt(text, 26 - (shift modulo 26))
END FUNCTION

SET plainText TO "Hello, World!"
SET shift TO 3

SET encryptedText TO caesarCipherEncrypt(plainText, shift)
SET decryptedText TO caesarCipherDecrypt(encryptedText, shift)

PRINT "Original text: " + plainText
PRINT "Encrypted text: " + encryptedText
PRINT "Decrypted text: " + decryptedText

END


*/ 

// ✅Coding challenge #36. Implement the bubble sort algorithm for an array of numbers


// Function to perform Bubble Sort on an array
function bubbleSort($array) {
    $n = count($array);
    
    // Traverse through all array elements
    for ($i = 0; $i < $n - 1; $i++) {
        // Last i elements are already in place
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($array[$j] > $array[$j + 1]) {
                // Swap elements
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    
    return $array;
}

// Example usage
$array = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = bubbleSort($array);
print_r($sortedArray);

// Psuedo Code

/*
START

FUNCTION bubbleSort(array)
    SET n TO length of array
    
    FOR i FROM 0 TO n - 2 DO
        FOR j FROM 0 TO n - i - 2 DO
            IF array[j] > array[j + 1] THEN
                // Swap elements
                SET temp TO array[j]
                SET array[j] TO array[j + 1]
                SET array[j + 1] TO temp
            END IF
        END FOR
    END FOR
    
    RETURN sorted array
END FUNCTION

SET array TO [64, 34, 25, 12, 22, 11, 90]
SET sortedArray TO bubbleSort(array)
PRINT sortedArray

END


*/ 

// ✅Coding challenge #37. Create a function to calculate the distance between two points defined by their x, y coordinates


// Function to calculate the distance between two points
function calculateDistance($x1, $y1, $x2, $y2) {
    // Calculate the differences in x and y coordinates
    $dx = $x2 - $x1;
    $dy = $y2 - $y1;
    
    // Calculate the distance using the Euclidean distance formula
    $distance = sqrt($dx * $dx + $dy * $dy);
    
    // Return the distance
    return $distance;
}

// Example usage
$x1 = 1;
$y1 = 2;
$x2 = 4;
$y2 = 6;

$distance = calculateDistance($x1, $y1, $x2, $y2);
echo "The distance between the points is: " . $distance;

// Psuedo Code

/*
START

FUNCTION calculateDistance(x1, y1, x2, y2)
    SET dx TO x2 - x1
    SET dy TO y2 - y1
    
    SET distance TO square root of (dx^2 + dy^2)
    
    RETURN distance
END FUNCTION

SET x1 TO 1
SET y1 TO 2
SET x2 TO 4
SET y2 TO 6

SET distance TO calculateDistance(x1, y1, x2, y2)
PRINT "The distance between the points is: " + distance

END



*/ 


// ✅Coding challenge #38. Create a function that will return a Boolean value indicating if two circles defined by center coordinates and radius are intersecting


// Function to check if two circles intersect
function circlesIntersect($x1, $y1, $r1, $x2, $y2, $r2) {
    // Calculate the distance between the centers of the two circles
    $dx = $x2 - $x1;
    $dy = $y2 - $y1;
    $distance = sqrt($dx * $dx + $dy * $dy);

    // Check if the distance is less than or equal to the sum of the radii
    // and greater than or equal to the absolute difference of the radii
    return $distance <= ($r1 + $r2) && $distance >= abs($r1 - $r2);
}

// Example usage
$x1 = 0;
$y1 = 0;
$r1 = 5;
$x2 = 4;
$y2 = 4;
$r2 = 5;

$intersecting = circlesIntersect($x1, $y1, $r1, $x2, $y2, $r2);
if ($intersecting) {
    echo "The circles are intersecting.";
} else {
    echo "The circles are not intersecting.";
}

// Psuedo Code

/*
START

FUNCTION circlesIntersect(x1, y1, r1, x2, y2, r2)
    SET dx TO x2 - x1
    SET dy TO y2 - y1
    SET distance TO square root of (dx^2 + dy^2)
    
    IF distance <= (r1 + r2) AND distance >= absolute value of (r1 - r2) THEN
        RETURN true
    ELSE
        RETURN false
    END IF
END FUNCTION

SET x1 TO 0
SET y1 TO 0
SET r1 TO 5
SET x2 TO 4
SET y2 TO 4
SET r2 TO 5

SET intersecting TO circlesIntersect(x1, y1, r1, x2, y2, r2)
IF intersecting THEN
    PRINT "The circles are intersecting."
ELSE
    PRINT "The circles are not intersecting."
END IF

END


*/ 


//✅ Coding challenge 39. Create a function that will receive a bi-dimensional array as argument and a number and will extract as a unidimensional array the column specified by the number


// Function to extract a column from a bi-dimensional array
function extractColumn($array, $columnIndex) {
    $column = [];
    
    // Check if the array is not empty and the column index is valid
    if (!empty($array) && isset($array[0][$columnIndex])) {
        foreach ($array as $row) {
            // Check if the row has the column index
            if (isset($row[$columnIndex])) {
                $column[] = $row[$columnIndex];
            }
        }
    }
    
    return $column;
}

// Example usage
$biDimensionalArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$columnIndex = 1;

$columnArray = extractColumn($biDimensionalArray, $columnIndex);
print_r($columnArray);

// Psuedo Code

/*
START

FUNCTION extractColumn(array, columnIndex)
    INITIALIZE an empty array column
    
    IF array is not empty AND columnIndex is valid THEN
        FOR EACH row IN array DO
            IF row has element at columnIndex THEN
                APPEND row[columnIndex] TO column
            END IF
        END FOR
    END IF
    
    RETURN column
END FUNCTION

SET biDimensionalArray TO [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]
SET columnIndex TO 1

SET columnArray TO extractColumn(biDimensionalArray, columnIndex)
PRINT columnArray

END


*/ 


// ✅Coding challenge #40. Create a function that will convert a string containing a binary number into a number


// Function to convert a binary string to a decimal number
function binaryToDecimal($binaryString) {
    // Use the built-in bindec function to convert binary to decimal
    return bindec($binaryString);
}

// Example usage
$binaryString = "1010"; // Binary representation of 10
$decimalNumber = binaryToDecimal($binaryString);
echo "The decimal value is: " . $decimalNumber;

// Psuedo Code

/*

START

FUNCTION binaryToDecimal(binaryString)
    // Use built-in function to convert binary string to decimal number
    RETURN bindec(binaryString)
END FUNCTION

SET binaryString TO "1010" // Example binary number
SET decimalNumber TO binaryToDecimal(binaryString)
PRINT "The decimal value is: " + decimalNumber

END


*/ 




// ✅Coding challenge #41. Create a function to calculate the sum of all the numbers in a jagged array (array contains numbers or other arrays of numbers on an unlimited number of levels)


// Function to calculate the sum of all numbers in a jagged array
function sumJaggedArray($array) {
    $sum = 0;

    foreach ($array as $element) {
        if (is_array($element)) {
            // Recursively sum nested arrays
            $sum += sumJaggedArray($element);
        } else {
            // Add number to sum
            $sum += $element;
        }
    }

    return $sum;
}

// Example usage
$jaggedArray = [
    1,
    [2, 3, [4, 5]],
    [6, [7, 8]],
    9
];

$totalSum = sumJaggedArray($jaggedArray);
echo "The sum of all numbers in the jagged array is: " . $totalSum;

// Pseudo Code

/*
START

FUNCTION sumJaggedArray(array)
    INITIALIZE sum TO 0
    
    FOR EACH element IN array DO
        IF element IS an array THEN
            // Recursively sum elements in the nested array
            SET sum TO sum + sumJaggedArray(element)
        ELSE
            // Add number to sum
            SET sum TO sum + element
        END IF
    END FOR
    
    RETURN sum
END FUNCTION

SET jaggedArray TO [
    1,
    [2, 3, [4, 5]],
    [6, [7, 8]],
    9
]

SET totalSum TO sumJaggedArray(jaggedArray)
PRINT "The sum of all numbers in the jagged array is: " + totalSum

END


*/ 

// ✅Coding challenge #42. Find the maximum number in a jagged array of numbers or array of numbers


// Function to find the maximum number in a jagged array
function findMaxInJaggedArray($array) {
    $max = PHP_INT_MIN; // Initialize with the smallest possible integer value

    foreach ($array as $element) {
        if (is_array($element)) {
            // Recursively find the maximum in nested arrays
            $max = max($max, findMaxInJaggedArray($element));
        } else {
            // Compare with current maximum
            $max = max($max, $element);
        }
    }

    return $max;
}

// Example usage
$jaggedArray = [
    1,
    [2, 3, [4, 5]],
    [6, [7, 8]],
    9
];

$maxNumber = findMaxInJaggedArray($jaggedArray);
echo "The maximum number in the jagged array is: " . $maxNumber;

// Pseudo Code

/*

START

FUNCTION findMaxInJaggedArray(array)
    SET max TO smallest possible integer value (e.g., PHP_INT_MIN)
    
    FOR EACH element IN array DO
        IF element IS an array THEN
            // Recursively find the maximum in the nested array
            SET max TO maximum of (max, findMaxInJaggedArray(element))
        ELSE
            // Compare element with the current maximum
            SET max TO maximum of (max, element)
        END IF
    END FOR
    
    RETURN max
END FUNCTION

SET jaggedArray TO [
    1,
    [2, 3, [4, 5]],
    [6, [7, 8]],
    9
]

SET maxNumber TO findMaxInJaggedArray(jaggedArray)
PRINT "The maximum number in the jagged array is: " + maxNumber

END


*/ 



// ✅Coding challenge #43. Deep copy a jagged array with numbers or other arrays in a new array


// Function to perform a deep copy of a jagged array
function deepCopyJaggedArray($array) {
    $copy = []; // Initialize an empty array for the copy

    foreach ($array as $element) {
        if (is_array($element)) {
            // Recursively copy nested arrays
            $copy[] = deepCopyJaggedArray($element);
        } else {
            // Directly copy numbers
            $copy[] = $element;
        }
    }

    return $copy;
}

// Example usage
$jaggedArray = [
    1,
    [2, 3, [4, 5]],
    [6, [7, 8]],
    9
];

$copiedArray = deepCopyJaggedArray($jaggedArray);

// Modify the copied array to demonstrate that it's a deep copy
$copiedArray[1][2][0] = 100;

echo "Original Array:\n";
print_r($jaggedArray);

echo "Copied Array:\n";
print_r($copiedArray);



// ✅Coding challenge #44. Create a function to return the longest word(s) in a string


// Function to return the longest word(s) in a string
function getLongestWords($string) {
    // Split the string into words
    $words = explode(' ', $string);
    
    // Initialize variables to store the longest words and their length
    $longestWords = [];
    $maxLength = 0;
    
    // Iterate through each word
    foreach ($words as $word) {
        // Trim any surrounding whitespace and ignore empty words
        $word = trim($word);
        if (strlen($word) === 0) {
            continue;
        }
        
        // Get the length of the current word
        $length = strlen($word);
        
        // Update the longest words array
        if ($length > $maxLength) {
            $longestWords = [$word];
            $maxLength = $length;
        } elseif ($length === $maxLength) {
            $longestWords[] = $word;
        }
    }
    
    return $longestWords;
}

// Example usage
$text = "Find the longest word in this string";
$longestWords = getLongestWords($text);
echo "The longest word(s): " . implode(', ', $longestWords);


// Pseudo Code

/*
START

FUNCTION getLongestWords(string)
    // Split the string into words
    SET words TO split string by spaces
    
    // Initialize variables to store the longest words and their length
    INITIALIZE longestWords AS an empty array
    INITIALIZE maxLength TO 0
    
    FOR EACH word IN words DO
        // Trim any surrounding whitespace and ignore empty words
        SET word TO trim(word)
        IF length of word IS 0 THEN
            CONTINUE to the next iteration
        END IF
        
        // Get the length of the current word
        SET length TO length of word
        
        IF length > maxLength THEN
            // Update the longest words array with the current word
            SET longestWords TO [word]
            SET maxLength TO length
        ELSE IF length IS equal to maxLength THEN
            // Add the current word to the longest words array
            APPEND word TO longestWords
        END IF
    END FOR
    
    RETURN longestWords
END FUNCTION

SET text TO "Find the longest word in this string"

SET longestWords TO getLongestWords(text)
PRINT "The longest word(s): " + join(longestWords, ', ')

END


*/ 


// ✅Coding challenge #45. Create a function that will receive n as argument and return an array of n unique random numbers from 1 to n.


// Function to return an array of n unique random numbers from 1 to n
function generateUniqueRandomNumbers($n) {
    // Generate an array with numbers from 1 to n
    $numbers = range(1, $n);
    
    // Shuffle the array to randomize the order
    shuffle($numbers);
    
    // Return the shuffled array, which contains unique random numbers
    return $numbers;
}

// Example usage
$n = 10;
$uniqueRandomNumbers = generateUniqueRandomNumbers($n);
echo "Unique random numbers: " . implode(', ', $uniqueRandomNumbers);


// Pseudo Code
/*
START

FUNCTION generateUniqueRandomNumbers(n)
    // Generate an array with numbers from 1 to n
    SET numbers TO array from 1 to n
    
    // Shuffle the array to randomize the order
    SHUFFLE numbers
    
    RETURN numbers
END FUNCTION

SET n TO 10
SET uniqueRandomNumbers TO generateUniqueRandomNumbers(n)
PRINT "Unique random numbers: " + join(uniqueRandomNumbers, ', ')

END


*/ 


// Coding challenge #46. Find the frequency of characters inside a string. Return the result as an array of objects. Each object has 2 fields: character and number of occurrences.


// Function to find the frequency of characters in a string
function getCharacterFrequency($string) {
    $frequency = []; // Associative array to store character frequencies
    
    // Iterate through each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        
        // Skip if the character is a whitespace or not a printable character
        if (ctype_space($char)) {
            continue;
        }
        
        // Update the frequency count
        if (isset($frequency[$char])) {
            $frequency[$char]++;
        } else {
            $frequency[$char] = 1;
        }
    }
    
    // Convert the associative array to an array of objects
    $result = [];
    foreach ($frequency as $char => $count) {
        $result[] = (object) [
            'character' => $char,
            'number_of_occurrences' => $count
        ];
    }
    
    return $result;
}

// Example usage
$text = "hello world";
$frequencyArray = getCharacterFrequency($text);

// Display the result
echo "Character frequencies:\n";
foreach ($frequencyArray as $item) {
    echo "Character: " . $item->character . ", Number of occurrences: " . $item->number_of_occurrences . "\n";
}


// Pseudo Code

/*

START

FUNCTION getCharacterFrequency(string)
    INITIALIZE frequency AS an empty associative array
    
    FOR EACH character IN string DO
        IF character IS whitespace OR NOT a printable character THEN
            CONTINUE to the next iteration
        END IF
        
        IF character IS in frequency THEN
            INCREMENT frequency[character]
        ELSE
            SET frequency[character] TO 1
        END IF
    END FOR
    
    INITIALIZE result AS an empty array
    
    FOR EACH character, count IN frequency DO
        CREATE an object with fields:
            character = character
            number_of_occurrences = count
        APPEND object TO result
    END FOR
    
    RETURN result
END FUNCTION

SET text TO "hello world"
SET frequencyArray TO getCharacterFrequency(text)

// Display the result
PRINT "Character frequencies:"
FOR EACH item IN frequencyArray DO
    PRINT "Character: " + item.character + ", Number of occurrences: " + item.number_of_occurrences
END FOR

END


*/ 

//✅ Coding challenge #47. Calculate Fibonacci(500) with high precision (all decimals)


// Function to calculate the nth Fibonacci number using BCMath
/*
function fibonacci($n) {
    // Handle base cases
    if ($n == 0) return '0';
    if ($n == 1) return '1';

    // Initialize first two Fibonacci numbers
    $a = '0';
    $b = '1';

    // Calculate Fibonacci using iteration
    for ($i = 2; $i <= $n; $i++) {
        $c = bcadd($a, $b); // Calculate the next Fibonacci number
        $a = $b; // Update the first number
        $b = $c; // Update the second number
    }

    return $b;
}

// Example usage
$n = 500;
$fibNumber = fibonacci($n);
echo "Fibonacci($n) is: $fibNumber\n";

*/ 


// Pseudo Code

/*
START

FUNCTION fibonacci(n)
    // Handle base cases
    IF n IS 0 THEN
        RETURN '0'
    END IF
    
    IF n IS 1 THEN
        RETURN '1'
    END IF
    
    // Initialize first two Fibonacci numbers
    SET a TO '0'
    SET b TO '1'
    
    // Calculate Fibonacci using iteration
    FOR i FROM 2 TO n DO
        SET c TO the sum of a and b (using arbitrary-precision arithmetic)
        SET a TO b
        SET b TO c
    END FOR
    
    RETURN b
END FUNCTION

SET n TO 500
SET fibNumber TO fibonacci(n)
PRINT "Fibonacci(n) is: " + fibNumber

END


*/ 


// ✅Coding challenge #48. Calculate 70! with high precision (all digits)

/*
To calculate the factorial of 70 (70!) with high precision in PHP, you need to use an arbitrary-precision arithmetic library, as factorials grow extremely large very quickly. PHP's BCMath or GMP libraries are suitable for this purpose.
*/ 


// Function to calculate factorial using BCMath
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return '1';
    }

    $result = '1';

    for ($i = 2; $i <= $n; $i++) {
        $result = bcmul($result, (string)$i); // Multiply result by i
    }

    return $result;
}

// Example usage
$n = 70;
$factorialResult = factorial($n);
echo "Factorial($n) is: $factorialResult\n";


// Pseudo Code

/*
START

FUNCTION factorial(n)
    IF n IS 0 OR n IS 1 THEN
        RETURN '1'
    END IF
    
    INITIALIZE result AS '1'
    
    FOR i FROM 2 TO n DO
        SET result TO result * i (using arbitrary-precision arithmetic)
    END FOR
    
    RETURN result
END FUNCTION

SET n TO 70
SET factorialResult TO factorial(n)
PRINT "Factorial(n) is: " + factorialResult

END



*/ 
