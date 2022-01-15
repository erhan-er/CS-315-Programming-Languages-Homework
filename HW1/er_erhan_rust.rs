fn main() {
    println!("*********************** Question 1 ***********************");
    let arr1 = [0, 1, 2, 3, 4];
    let a = 2;
    
    print!("arr1: ");
    for x in arr1 {
        print!("{} ", x);
    }
    println!();
    
    println!("arr1[1]: {} ", arr1[1]);
    println!("arr1[a]: {} ", arr1[a]);
    //print!("arr1[true]: {} ", arr1[true]);
    //print!("arr1[string]: {}", arr1["a"]);
    //print!("arr1[char]: {}", arr1['a']);
    println!("**********************************************************");
    
    println!("*********************** Question 2 ***********************");
    let range_arr = [0, 1, 2, 3, 4, 5];
    
    print!("range_arr: ");
    for x in range_arr {
        print!("{} ", x);
    }
    println!();
    
    println!("range_arr[6]: {}", range_arr[5]);
    println!("range_arr[0]: {}", range_arr[0]);
    //print!("range_arr[-1]: {}", range_arr[-1]); This will cause error
    //print!("range_arr[6]: {}", range_arr[6]); This will cause error
    
    //Therefore, rust checks bound
    
    println!("**********************************************************");
    
    println!("*********************** Question 3 ***********************");
    let arr2 = [0, 1, 2, 3, 4];
    
    print!("arr2: ");
    for x in arr2 {
        print!("{} ", x);
    }
    println!();
    
    //arr2.push(5); It is not allowed
    //arr2.resize(10); It is not allowed
    println!("**********************************************************");
    
    println!("*********************** Question 4 ***********************");
    /* println!("allocation_arr[1]: {} ", allocation_arr[1]); 
     * Because of this, program does not compile */
    
    let allocation_arr = [0, 1, 2, 3, 4, 5];
    
    println!("allocation_arr[1]: {} ", allocation_arr[1]);
    println!("**********************************************************");
    
    println!("*********************** Question 5 ***********************");
    let rectangular_arr = [[2; 6]; 6];
    println!("rectangular_arr: ");
    for x in rectangular_arr {
        for y in x {
            print!("{} ", y);
        }
        println!();
    }
    println!("**********************************************************");
    
    println!("*********************** Question 7 ***********************");
    let slice_arr = [0, 1, 2, 3, 4, 5];
    print!("slice_arr: ");
    for x in slice_arr {
        print!("{} ", x);
    }
    println!();
    
    let sliced_arr1 = &slice_arr[2..4];
    print!("sliced_arr1: ");
    for x in sliced_arr1 {
        print!("{} ", x);
    }
    println!();
    
    let sliced_arr2 = &slice_arr[1..=4];
    print!("sliced_arr2: ");
    for x in sliced_arr2 {
        print!("{} ", x);
    }
    println!();
    
    let sliced_arr3 = &slice_arr[3..];
    print!("sliced_arr3: ");
    for x in sliced_arr3 {
        print!("{} ", x);
    }
    println!();
    
    //let sliced_arr3 = &slice_arr[-1..3]; This will cause error
    println!("**********************************************************");
    
    println!("*********************** Question 8 ***********************");
    let operation_arr1 = [0, 1, 2, 3, 4];
    let operation_arr2 = [100, 6, 7, 8, 9];
    let operation_arr3 = [0, 1, 2, 3, 4];
    let operation_arr4 = operation_arr1;
    let operation_arr5 = [21, 0, 0, 0, 0];
    let operation_arr6 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    
    print!("operation_arr1: ");
    for x in operation_arr1 {
        print!("{} ", x);
    }
    println!();
    
    print!("operation_arr2: ");
    for x in operation_arr2 {
        print!("{} ", x);
    }
    println!();
    
    print!("operation_arr3: ");
    for x in operation_arr3 {
        print!("{} ", x);
    }
    println!();
    
    print!("operation_arr4: ");
    for x in operation_arr4 {
        print!("{} ", x);
    }
    println!();
    
    print!("operation_arr5: ");
    for x in operation_arr5 {
        print!("{} ", x);
    }
    println!();
    
    print!("operation_arr6: ");
    for x in operation_arr6 {
        print!("{} ", x);
    }
    println!();
    
    println!("operation_arr1 == operation_arr2: {}", operation_arr1 == operation_arr2);
    println!("operation_arr1 == operation_arr3: {}", operation_arr1 == operation_arr3);
    println!("operation_arr1 == operation_arr5: {}", operation_arr1 == operation_arr5);
    println!("operation_arr1 != operation_arr4: {}", operation_arr1 != operation_arr4);
    println!("operation_arr2 > operation_arr5: {}", operation_arr2 > operation_arr5);
    /* println!("operation_arr6 > operation_arr2: {}", operation_arr6 > operation_arr2);
     * It only accepts arrays that have the same size */
    println!("operation_arr1 < operation_arr5: {}", operation_arr1 < operation_arr5);
    println!("operation_arr1 <= operation_arr3: {}", operation_arr1 <= operation_arr3);
    println!("operation_arr1 >= operation_arr3: {}", operation_arr1 >= operation_arr2);
    println!("**********************************************************");
    
    
}