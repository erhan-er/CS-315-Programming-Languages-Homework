<?php
//----------------------- Question 1 -----------------------\\
print "*********************** Question 1 *********************** \n";
$arr1 = array(0, 1, 2, 3, 4);
$index = 1;

print "arr1: ";
var_dump($arr1);
/* In the console, we will see the values at the specified indexes */ 
echo "arr[0]: $arr1[0]\n";
echo "arr[index]: $arr1[$index]\n";
print "arr[true]: " . $arr1[true] . "\n";
print "arr[false]: " . $arr1[false] . "\n";

// In the console, compiler will give error
//print "5: " . $arr1["a"] . "\n";
//print "6: " . $arr1['a'] . "\n";
print "********************************************************** \n\n";
//----------------------------------------------------------\\

//----------------------- Question 2 -----------------------\\
print "*********************** Question 2 *********************** \n";
$rangeArr = array(0, 1, 2, 3, 4, 5);

print "rangeArr: ";
var_dump($rangeArr);
// The compiler will give error
//print "rangeArr[10]: " . $rangeArr[10] . "\n";
//print "rangeArr[-1]: " . $rangeArr[-1] . "\n";
print "********************************************************** \n\n";
//----------------------------------------------------------\\

//----------------------- Question 3 -----------------------\\
print "*********************** Question 3 *********************** \n";
$arr2 = array("Bilkent", "University");
print "arr2: ";
var_dump($arr2);

array_push($arr2, "CS", 315);
print "arr2 after push operation: ";
var_dump($arr2);
print "********************************************************** \n\n";
//----------------------------------------------------------\\

//----------------------- Question 4 -----------------------\\
print "*********************** Question 4 *********************** \n";
//print "allocationArr[1]: " . $allocationArr[1] . "\n"; This will throw an error
	
$allocationArr = array(0, 1, 2, 3, 4, 5);
print "allocationArr: ";
var_dump($allocationArr);
print "allocationArr[3]: " . $allocationArr[3] . "\n";
print "********************************************************** \n\n";
//----------------------------------------------------------\\

//----------------------- Question 5 -----------------------\\
print "*********************** Question 5 *********************** \n";
// Ragged Array initialization
$raggedArr = array(1, array(2, 3), array(4, 5, 6) , array(7, 8), 9);
	
// Print whole array
print "Ragged Array: ";
var_dump($raggedArr);
print "------------ \n";
	
// Get some values from array
print "raggedArr[2][1]: " . $raggedArr[2][1] . "\n";				
print "raggedArr[1][1]: " . $raggedArr[1][1] . "\n";				
	
// Rectangular Array initialization
$rectangularArr = array( array(1, 2), array(3, 4), array(5, 6), array(7, 8) );
	
// Print whole array
print "Rectangular Array: ";
var_dump($rectangularArr);
print "----------------- \n";
	
// Get some values from array
print "rectangularArr[1][1]: " . $rectangularArr[1][1] . "\n";			
print"rectangularArr[0][1]: " . $rectangularArr[0][1] . "\n";	
print "********************************************************** \n\n";
//----------------------------------------------------------\\

//*********************** Question 7 ***********************\\
print "*********************** Question 7 *********************** \n";
$sliceArr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
print "Slice Array: ";
var_dump($sliceArr);
print "----------- \n";
	
$slicedArr1 = array_slice($sliceArr, 3);
print "Sliced Array 1: Slice Array is sliced from 3: ";
var_dump($slicedArr1);
print "-------------------------------------------------------------- \n";
	
$slicedArr2 = array_slice($sliceArr, -3);
print "Sliced Array 2: Slice Array is sliced from -3: ";
var_dump($slicedArr2);
print "------------------------------------------ \n";
	
$slicedArr3 = array_slice($sliceArr, 2, 5);
print "Sliced Array 3: Slice Array is sliced from 2 to 5: ";
var_dump($slicedArr3);
print "---------------------------------------------- \n";

$slicedArr4 = array_slice($sliceArr, -2, 5);
print "Sliced Array 4: Slice Array is sliced from -2 to 5: ";
var_dump($slicedArr4);
print "---------------------------------------------- \n";

$slicedArr5 = array_slice($sliceArr, 2, -3);
print "Sliced Array 5: Slice Array is sliced from 2 to -3: ";
var_dump($slicedArr5);
print "---------------------------------------------- \n";

$slicedArr6 = array_slice($sliceArr, -2, -5);
print "Sliced Array 6: Slice Array is sliced from -2 to -5: ";
var_dump($slicedArr6);
print "---------------------------------------------- \n";

print "Slice Array: ";
var_dump($sliceArr);
print "----------- \n";
print "********************************************************** \n\n";
//----------------------------------------------------------\\

//----------------------- Question 8 -----------------------\\
print "*********************** Question 8 *********************** \n";
$operationArr1 = array( "a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5 );
$operationArr2 = array( "e" => 5, "d" => 4, "c" => 3, "b" => 2, "a" => 1 );
$operationArr3 = array( "a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5 );
$operationArr4 = array( "f" => 5, "g" => 4, "h" => 3, "i" => 2, "j" => 1 );
$operationArr5 = $operationArr1;

$operation1 = $operationArr1 + $operationArr4;
print "operationArr1 + operationArr4: ";
var_dump($operation1);

$operation2 = $operationArr1 + $operationArr2;
print "operationArr1 + operationArr2";
var_dump($operation2);

$operation3 = $operationArr1 == $operationArr2;
print "operationArr1 == operationArr2: ";
var_dump($operation3);

$operation4 = $operationArr1 === $operationArr2;
print "operationArr1 === operationArr2: ";
var_dump($operation4);

$operation5 = $operationArr1 === $operationArr3;
print "operationArr1 === operationArr3: ";
var_dump($operation5);

$operation6 = $operationArr1 != $operationArr4;
print "operationArr1 != operationArr4: ";
var_dump($operation6);

$operation7 = $operationArr1 <> $operationArr4;
print "operationArr1 <> operationArr4: ";
var_dump($operation7);

$operation8 = $operationArr1 !== $operationArr2;
print "operationArr1 !== operationArr2: ";
var_dump($operation8);

$operation9 = $operationArr1 <> $operationArr5;
print "operationArr1 <> operationArr5";
var_dump($operation9);
print "********************************************************** \n\n";
//----------------------------------------------------------\\
?>
