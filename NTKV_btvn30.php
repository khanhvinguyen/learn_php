
<!-- Câu 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
function checkNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không là số chẵn.";
    }
}
$number = 4; 
checkNumber($number);
?>

<!--Câu  2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
function total($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 7; 
$tong = total($n);
echo "Tổng của các số từ 1 đến $n là: $tong";
?>

<!--Câu  3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
function multiplicationTable($n) {
    echo "<br>"."Bảng cửu chương $n:";
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result\n";
    }
    echo "\n";
}
for ($j = 1; $j <= 10; $j++) {
    multiplicationTable($j);
}
?>

<!-- Câu 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
function checkString($string1, $string2) {
    $check = strpos($string1, $string2);
    if ($check !== false) {
        echo "Chuỗi '$string1' chứa từ '$string2'.";
    } else {
        echo "Chuỗi '$string1' không chứa từ '$string2'.";
    }
}
$string1 = "Khanh Vi"; 
$string2= "Vi"; 
checkString($string1, $string2);
?>

<!--Câu  5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function maxMin($mang) {
    $min = $mang[0]; 
    $max = $mang[0]; 
foreach ($mang as $value) {
        if ($value < $min) {
            $min = $value; 
        }
        if ($value > $max) {
            $max = $value; 
        }
    }
    echo "Giá trị nhỏ nhất trong mảng là: $min\n"."<br>";
    echo "Giá trị lớn nhất trong mảng là: $max\n";
}
$mang = [3, 6, 1, 10, 7, 9]; 
maxMin($mang);
?>

<!-- Câu 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
function sortArray($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n - 1; $i++) { 
        for ($j = $i + 1; $j < $n; $j++) {
            if ($mang[$i] > $mang[$j]) {
                $temp = $mang[$i];
                $mang[$i] = $mang[$j];
                $mang[$j] = $temp;
            }
        }
    }
    echo "Mảng sau khi được sắp xếp tăng dần là: ";
    foreach ($mang as $value) {
        echo "$value ";
    }
}
$mang = [8,1,9,7,4]; 
sortArray($mang);
?>

<!-- Câu 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function factorialCalculation($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorialCalculation($n - 1);
    }
}
$number = 4; 
$factorial = factorialCalculation($number);
echo "Giai thừa của $number là: $factorial";
?>

<!--Câu  8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function checkPrimes($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}


function checkPrimes1($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (checkPrimes($i)) {
            echo $i . " ";
        }
    }
}
$start = 5; 
$end = 20; 
checkPrimes1($start, $end);
?>

<!--Câu 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
function sumArray($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}
$array = [6,7,3,2,10]; 
$sum = sumArray($array);
echo "Tổng của các số trong mảng là: $sum";
?>

<!--Câu 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function printFibonacci ($start, $end) {
    $fib1 = 0;
    $fib2 = 1;
    $fib = $fib1 + $fib2;
    echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
    while ($fib <= $end) {
        if ($fib >= $start) {
            echo $fib . " ";
        }
        $fib1 = $fib2;
        $fib2 = $fib;
        $fib = $fib1 + $fib2;
    }
}
$start = 4; 
$end = 40; 
printFibonacci($start, $end);
?>

<!--Câu 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function checkArmstrong($number)
{
    $sum = 0;
    $originalNumber = $number;
    $numDigits = strlen($number);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }
    if ($sum === $originalNumber) {
        return true;
    } else {
        return false;
    }
}
$number = 40;
if (checkArmstrong($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không là số Armstrong.";
}
?>

<!--Câu 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function insertElement($arr, $element, $position)
{
   array_splice($arr, $position, 0, $element); 
   return $arr;
}
$array = [3,5,8,9,7];
$element = 4;  
$position = 2;  
$resultArray = insertElement($array, $element, $position); 
print_r($resultArray);
?>

<!--Câu 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function removeDuplicates($arr)
{
    $counts = array_count_values($arr);
    $result = array_filter($arr, function ($value) use ($counts) {   
        return $counts[$value] === 1;
    });
    return array_values($result);  
}
$originalArray = [1,6,7,6,2,7,3];    
$filteredArray = removeDuplicates($originalArray);
print_r($filteredArray);
?>

<!--Câu 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function findLocation ($arr, $element)
{
    $position = array_search($element, $arr);  
    if ($position !== false) {
        return $position; 
    } else {
        return -1; 
    }
}
$array = [2,4,7,6,9];
$element = 7;
$position = findLocation($array, $element);
if ($position !== -1) {
    echo "Vị trí của phần tử $element là $position";
} else {
    echo "Không tìm thấy phần tử $element trong mảng";
}
?>

<!--Câu 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function reverseString($string)
{
 $n = strlen($string);
 if($n == 1)
   {
    return $string;
   }
 else
   {
   $n--;
   return reverseString(substr($string,1, $n)) . substr($string, 0, 1);
   }
}
print_r(reverseString('Xin chao moi nguoi')."\n");
?>


<!--Câu 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
function countNumber($array) {
    $number = count($array);
    return $number;
}
$array = [7,2,6,1,9,8]; 
$number = countNumber($array);
echo "Số lượng phần tử trong mảng là: $number";
?>

<!--Câu 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
        function checkPalindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo checkPalindrome('mem')."<br>";
       ?>

<!--Câu 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function countOccurrences($arr, $element)
{
    $count = 0;
    foreach ($arr as $value) {
       
        if ($value == $element) {
            $count++;
        }
    }
    return $count;
}
$array = [7, 2, 4, 7, 6 ,7];
$element = 7;
$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: " . $occurrences;
?>

<!--Câu 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
function sortArray1($arr)
{
    rsort($arr); 
    return $arr;  
}
$array = [7,6,3,2,9,8];
$sortedArray = sortArray1($array);  
print_r($sortedArray);
?>

<!--Câu 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function addElement($arr, $element, $position)
{
    if ($position === 'begin') {    
        array_unshift($arr, $element);
    } elseif ($position === 'end') {
        $arr[] = $element;             
    }
    return $arr;
}
$array = [ 6, 7, 8, 9];
$element = 5;
$position = 'begin';
$resultArray = addElement($array, $element, $position);
print_r($resultArray);
?>

<!--Câu 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
function findSecond($arr)
{
    $count = count($arr);     
    if ($count < 2) {         
        return "Không có số lớn thứ hai trong mảng.";
    }
    rsort($arr); 
    return $arr[1];  
}
$array = [20, 9 ,17, 10, 30];
$secondLargest = findSecond($array);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>

<!--Câu  22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function findDivisor($a, $b)
{
   
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function findMultiples($a, $b)
{
    
    $gcd = findDivisor($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}
$num1 = 10;   
$num2 = 20;   
$gcd = findDivisor($num1, $num2);   
$lcm = findMultiples($num1, $num2);  
echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $gcd . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $lcm;
?>

<!--Câu  23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function perfectNumber($number)
{
    if ($number <= 0) {    
        return false;
    }
    
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 20;
if (perfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
?>

<!--Câu  24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function findLargestOddNumber($arr)
{
    $largestOddNumber = null;   
    foreach ($arr as $number) {
        if ($number % 2 != 0 && ($largestOddNumber === null || $number > $largestOddNumber)) {
            $largestOddNumber = $number;
        }
    }  
    return $largestOddNumber;  
}
$array = [1,22,32,41,5,16,22];
$largestOdd = findLargestOddNumber($array);
if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;
} else {
    echo "Không có số lẻ trong mảng.";
}
?>

<!--Câu  25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function checkPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 11;
if (checkPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
?>

<!--Câu  26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function findLargestPositiveNumber($arr)
{
    $largestPositiveNumber = null;   
    foreach ($arr as $number) {
        if ($number > 0 && ($largestPositiveNumber === null || $number > $largestPositiveNumber)) {
            $largestPositiveNumber = $number;
        }
    }
    return $largestPositiveNumber;
}
$array = [1,-12, 7, -2 , 20];
$largestPositive = findLargestPositiveNumber($array);
if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
} else {
    echo "Không có số dương trong mảng.";
}
?>

<!--Câu  27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function findLargestNegativeNumber($arr)
{
    $largestNegativeNumber = null; 
    foreach ($arr as $number) {
        if ($number < 0 && ($largestNegativeNumber === null || $number > $largestNegativeNumber)) {
            $largestNegativeNumber = $number;
        }
    }
    return $largestNegativeNumber;
}
$array = [1,-12, 7, -2 , 20];
$largestNegative = findLargestNegativeNumber($array);
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
} else {
    echo "Không có số âm trong mảng.";
}
?>

<!--Câu  28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function oddTotals($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 11;
$sum = oddTotals($n);
echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;
?>

<!--Câu  29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function findPerfectSquares($start, $end)
{
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int)sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 21;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng $start đến $end là: " . implode(', ', $perfectSquares);
?>


<!--Câu  30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function CheckString2($string, $substring)
{
    $position = strpos($string, $substring); 
    if ($position !== false) {
        return true;
    } else {
        return false;
    }
}
$mainString = "Khánh Vi";
$subString = "ú nu";
$CheckString2 = CheckString2($mainString, $subString);


if ($CheckString2) {
    echo "Chuỗi '$subString' là chuỗi con của chuỗi '$mainString'.";
} else {
    echo "Chuỗi '$subString' không là chuỗi con của chuỗi '$mainString'.";
}
?>

