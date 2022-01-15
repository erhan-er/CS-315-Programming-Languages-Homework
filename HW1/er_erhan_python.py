# Online Python compiler (interpreter) to run Python online.
# Write Python 3 code in this online editor and run it.
import numpy as np

print("*********************** Question 1 ***********************")
arr = np.array([0, 1, 2, 3, 4, 5])
index = 1

print("arr:", arr)
print("arr[3]:", arr[3])
print("arr[index]:", arr[index])
print("arr[-1]:", arr[-1])
#print("arr[true]:", arr[true])
#print("arr[a]:", arr["a"])
#print("arr[char]:", arr['a'])
print("**********************************************************")

print("*********************** Question 2 ***********************")
rangeArr = np.array([0, 1, 2, 3, 4, 5])

print("rangeArr:", rangeArr)
#print("rangeArr[6]:", rangeArr[6]) Out of bounds
#print("rangeArr[-7]:", rangeArr[-7]) Out of bounds

print("rangeArr[-6]:", rangeArr[-6])
print("rangeArr[5]:", rangeArr[5])
#Therefore, it accepts integer values from -array.size to array.size - 1 
print("**********************************************************")

print("*********************** Question 3 ***********************")
addArr = np.array([0, 1, 2, 3, 4])
addArr2 = np.array([5, 6, 7, 8, 9])

print("addArr:", addArr)
print("addArr2:", addArr2)

addArr += 6
print("addArr:", addArr) #it does not add a new element to the array
addArr3 = np.insert(addArr, addArr.size, 12) #it does not add a new element to the original array
print("addArr3:", addArr3)

addArr4 = np.concatenate((addArr, addArr2)) #it does not add a new elemet to the original array
print("addArr4:", addArr4)

addArr2.resize(10, refcheck=False); #The only way to change the array size
addArr2[7] = 7;
print("addArr2: ", addArr2);
print("**********************************************************")

print("*********************** Question 4 ***********************")
#Program executes until this line.
#print("allocationArr[1]:", allocationArr[1])

allocationArr = np.array([0, 1, 2, 3, 4])
print("allocationArr:", allocationArr)
print("allocationArr[2]:", allocationArr[2])
print("**********************************************************")

print("*********************** Question 5 ***********************")
raggedArr = np.array([0, np.array([1, 2]), np.array([3, 4, 5]), np.array([6, 7]), 8], dtype=list)
print("raggedArr:", raggedArr)
print("raggedArr[1][1]:", raggedArr[1][1])
print("raggedArr[2][2]:", raggedArr[2][2])

rectangularArr = np.array([[0, 1], [2, 3], [4, 5]])
print("rectangularArr:", rectangularArr)
print("rectangularArr[1][0]:", rectangularArr[1][1])
print("rectangularArr[2][1]:", rectangularArr[2][1])
print("**********************************************************")

print("*********************** Question 6 ***********************")
objectArr = [x for x in range(100) if x % 5 == 0]
print("objectArr: ", objectArr)
print("objectArr[3]: ", objectArr[3])
print("objectArr[10]", objectArr[10])
print("**********************************************************")

print("*********************** Question 7 ***********************")
sliceArr = np.array([0, 1, 2, 3, 4, 5, 6, 7, 8, 9])
print("sliceArr: ", sliceArr)
# There are two ways of doing this
# First, slicing the array and putting it in an another variable
# Or directly printin it
# I used the first one for only the first example
# Others will be in second form.
slicedArr1 = sliceArr[2:]
print("slicedArr1: ", slicedArr1)
print("slicedArr2: ", sliceArr[2::2])
print("slicedArr3: ", sliceArr[:4])
print("slicedArr4: ", sliceArr[2:5])
print("slicedArr5: ", sliceArr[1:8:2])
print("slicedArr6: ", sliceArr[9:0:-3])
print("slicedArr7: ", sliceArr[-3:])
print("slicedArr8: ", sliceArr[-6:9])
print("slicedArr9: ", sliceArr[-8:-2])
print("slicedArr10: ", sliceArr[-1:-8:-2])

print("sliceArr: ", sliceArr)
print("**********************************************************")

print("*********************** Question 8 ***********************")
# <, <=, >, >=, ==, !=, +, -, *, /, %, |, &, ^, **, also (+++...) and (---...) works 
operationArr1 = np.array([1, 2, 3, 4, 5])
operationArr2 = np.array([6, 7, 8, 9, 10])
operationArr3 = np.array([5, 2, 4, 3, 1])
operationArr4 = operationArr1
operationArr5 = np.array([0, 1, 2, 3, 4, 5, 6, 7]);

#operation = operationArr5 + operationArr1 It is not allowed
print("operationArr1 + operationArr2: ",operationArr1 + operationArr2)
print("operationArr1 - operationArr2: ",operationArr1 - operationArr2)
print("operationArr1 * operationArr2: ",operationArr1 * operationArr2)
print("operationArr4 / operationArr1: ",operationArr4 / operationArr1)
print("operationArr2 % operationArr1: ",operationArr2 % operationArr1)
print("operationArr2 ^ operationArr1: ",operationArr2 ^ operationArr1)
print("operationArr3 ** operationArr1: ",operationArr3 ** operationArr1)
print("operationArr1 ++ operationArr2: ",operationArr1 ++ operationArr2)
print("operationArr1 +++ operationArr2: ",operationArr1 +++ operationArr2)
print("operationArr1 -- operationArr2: ",operationArr1 -- operationArr2)
print("operationArr1 --- operationArr2: ",operationArr1 --- operationArr2)
print("operationArr1 < operationArr2: ",operationArr1 < operationArr2)
print("operationArr1 <= operationArr3: ",operationArr1 <= operationArr3)
print("operationArr1 > operationArr2: ",operationArr1 > operationArr2)
print("operationArr1 >= operationArr3: ",operationArr1 >= operationArr3)
print("operationArr1 == operationArr4: ",operationArr1 == operationArr4)
print("operationArr1 != operationArr3: ",operationArr1 != operationArr3)
print("operationArr1 | operationArr3: ",operationArr1 | operationArr3)
print("operationArr1 & operationArr3: ",operationArr1 & operationArr3)


print("**********************************************************")

