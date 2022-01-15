use std::time::{Duration, Instant};
fn main() {
    println!("********** Question 1 **********");
    // Boolean types only be assigned to true or false
    // other data types are not allowed.
    //let bool1: bool = 1;
    //let bool2: bool = "abc";
    let bool3: bool = true;
    let bool4: bool = false;
    
    println!( "bool3: {}", bool3);
    println!( "bool4: {}", bool4);
    println!( "********************************");
    
    println!( "********** Question 2 **********");
    // Only && and || are short circuited
    println!( "********************************");
    
    println!( "********** Question 3 **********");
    
    fn helper1() -> bool {
    	println!( "helper1 returns true");
    	return true;
    }
    
    // It will call helper1
    // Because of true, it also needs to check the other side
    println!( "boolOp1: {}", true && helper1());
    
    // It will not call helper1
    // Because of false, it does not need the other side
    println!( "boolOp2: {}", false && helper1());
    
    // It will not call helper1
    // Because of true, ,t does not need the other side
    println!( "boolOp3: {}", true || helper1());
    
    // It will call helper1
    // Because of false, it also needs to check the other side
    println!( "boolOp4: {}", false || helper1());
    println!( "********************************");
    
    println!( "********** Question 4 **********");
    fn timer() -> bool {
        for i in 0..1000000 {
            let _a = i;            
        }
        return false;
    }
    
    let mut start = Instant::now();
    if timer() || timer() || timer() || timer() || timer() || timer() || timer() || timer() || timer() || true {
        println!( "without short circuit");
    }
    let mut duration = start.elapsed();
    println!( "Time Elapsed: {:?}", duration);
    
    start = Instant::now();
    if true || timer() || timer() || timer() || timer() || timer() || timer() || timer() || timer() || timer() {
        println!( "with short circuit");
    }
    duration = start.elapsed();
    println!( "Time Elapsed: {:?}", duration);
    println!( "********************************");
    
    println!( "********** Question 5 **********");
    static mut VALUE: i32 = 20;
    fn helper2() -> bool {
        unsafe {
            VALUE = 5;
        }
        println!( "helper2 assigns value to 5 and returns true");
        return true;
    }
    
    if true || helper2() {
        unsafe {
            let a = VALUE * 2;
            
            println!( "a: {}", a);
        }
    }
    println!( "********************************");
}