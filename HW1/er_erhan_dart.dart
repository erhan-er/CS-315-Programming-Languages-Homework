void main() {
  
  //----------------------- Question 1 -----------------------\\
  print("*********************** Question 1 ***********************");
  var arr = [0, 1, 2, 3, 4];
  var index = 2;
  
  print("arr: $arr");
  
  /* In the console, we will see the values at the specified indexes */ 
  var value1 = arr[1];
  var value2 = arr[index];
  
  print("1: $value1");
  print("2: $value2");
  
  // The compiler will give an error
  //var value3 = arr["a"];
  //var value4 = arr[-1];
  //var value5 = arr[true];
  //var value6 = arr['a'];
  print("**********************************************************");
  //----------------------------------------------------------\\
  
  //----------------------- Question 2 -----------------------\\
  print("*********************** Question 2 ***********************");
  var rangeArr = [0, 1, 2, 3, 4, 5];
  print("rangeArr: $rangeArr");
  
  /* The compiler will give index out of range error.
   * Therefore, Dart checks range. */
  //var value7 = rangeArr[rangeArr.length + 1];
  //var value8 = rangeArr[-2];
  print("**********************************************************");
  //----------------------------------------------------------\\
  
  //----------------------- Question 3 -----------------------\\
  print("*********************** Question 3 ***********************");
  var arr2 = [0, 1, 2, 3, 4, 5];
  print("arr2: $arr2");
  
  arr2.add(6);
  arr2.add(7);
  //arr2[8] = 8; This will cause error
  
  print("arr2: $arr2");
  print("**********************************************************");
	//----------------------------------------------------------\\
  
  //----------------------- Question 4 -----------------------\\
  print("*********************** Question 4 ***********************");
  /* Compiler will give error. 
   * Therefore, we can not reach a value before it is created 
   **/
  //print(allocationArr[1]);
  
  var allocationArr = [0, 1, 2, 3, 4];
  
  print(allocationArr[2]);
  print("**********************************************************");
  //----------------------------------------------------------\\
  
  //----------------------- Question 5 -----------------------\\
  print("*********************** Question 5 ***********************");
  // Ragged Array initialization
var raggedArr = [1, [2, 3], [4, 5, 6], [7, 8], 9];
print("raggedArr: $raggedArr");
var value9 = raggedArr[2];
var value10 = raggedArr[3];
print("raggedArr[2]: $value9");
print("raggedArr[3]: $value10");
var rectangularArr = [[1, 2], [3, 4], [5, 6]];
print("rectangularArr: $rectangularArr");
var value11 = rectangularArr[0][1];
var value12 = rectangularArr[2][1];
print("rectangularArr[0][1]: $value11");
print("rectangularArr[2][1]: $value12");
  print("**********************************************************");
  //----------------------------------------------------------\\
  
  //----------------------- Question 6 -----------------------\\
  print("*********************** Question 6 ***********************");
  var objectArr = [for( var x = 0; x < 20; x++) x * 2 ];
  print("objectArr: $objectArr");
  var value13 = objectArr[5];
  var value14 = objectArr[12];
  print("objectArr: $value13");
  print("objectArr: $value14");
  print("**********************************************************");
  //----------------------------------------------------------\\
  
  //----------------------- Question 7 -----------------------\\
  print("*********************** Question 7 ***********************");
  var sliceArray = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  print("Slice Array: $sliceArray");
  
  var slicedArray1 = sliceArray.sublist(5);
  print("Sliced Array 1; Slice array is sliced from 5: $slicedArray1");
  
  var slicedArray2 = sliceArray.sublist(2, 5);
  print("Sliced Array 2; Slice array is sliced from 2 to 5: $slicedArray2");
  
  // It does not allow us to enter negative values
  //var slicedArray3 = sliceArray.sublist(2, -1);
  //var slicedArray4 = sliceArray.sublist(-2);
  
  print("Slice Array: $sliceArray");
  
  print("**********************************************************");
  //----------------------------------------------------------\\
  
  //----------------------- Question 8 -----------------------\\
  print("*********************** Question 8 ***********************");
  var operationArray1 = [0, 1, 2, 3, 4];
  var operationArray2 = [5, 6, 7, 8, 9];
  var operationArray3 = [0, 1, 2, 3, 4];
  var operationArray4 = [3, 1, 0, 2, 4];
  
  var operation1 = operationArray1 + operationArray2;
  print("operationArray1 + operation2: $operation1");
  
  var operation2 = operationArray1 == operationArray2;
  print("operationArray1 == operationArray2: $operation2");
  
  var operation3 = operationArray1 != operationArray3;
  print("operationArray1 != operationArray3: $operation3");
  print("**********************************************************");
  //----------------------------------------------------------\\
}
