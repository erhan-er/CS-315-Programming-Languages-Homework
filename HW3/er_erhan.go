package main

import "fmt"

func main() {
	fmt.Println("********** Nested subprogram definitions **********")

	/* In Go, nested functions are allowed.
	 * In order to create a nested function
	 *	the function declaration must be assigned to a variable.
	 **/
	sub1 := func(a int) int { // nested in main
		sub2 := func() int { return a * 5 } // nested in sub1
		return sub2()
		// total return 5a
	}

	sub3 := func(a int) int { // nested in main
		sub4 := func(a int) int { // nested in sub3
			sub5 := func(a int) int { // nested in sub4
				return a + 5
			}
			a = a * 5
			return sub5(a)
		}
		a = a * 10
		return sub4(a)
		// total return 50a + 5
	}

	fmt.Println(sub1(10)) // It will print 50
	fmt.Println(sub3(20)) // It will print 1005
	fmt.Println("***************************************************")

	fmt.Println("********** Scope of local variables **********")

	a := 1
	b := 2
	c := 3

	scope5 := func() {
		fmt.Println("In scope5: a -", a, " b -", b, " c -", c)
		/* Go has static scope, thus it will look for the parent function of scope5.
		 * The parent function is main.
		 * Therefore the result is a - 1, b - 2, c - 3
		 **/
	}

	scope1 := func() {
		b := 5
		scope2 := func() {
			a := 10

			scope4 := func() {
				fmt.Println("In scope 4: a -", a, " b -", b, " c -", c)
				/* Go has static scope, thus it will look for the parent functions of scope4.
				 * The parent function is scope2 and scope 2 has the variable a.
				 * Therefore, a comes from scope2. However, scope2 does not have other variables.
				 * Therefore, it will look the parent of scope2 for the other variables.
				 * Scope2's parent is scope1 and it has the variable b.
				 * Thus, b comes from scope1. However, it does not variable c
				 * Therefore, it will look the parent of scope1 for the variable c.
				 * Main is the parent of scope1 and main has variable c.
				 * Thus, c comes from main.
				 * Therefore the result is a - 10, b - 5, c - 3
				 **/
			}

			scope4()
			fmt.Println("In scope 2: a -", a, " b -", b, " c -", c)
			/* Go has static scope, thus it will look for the parent functions of scope2.
			 * Therefore, a comes from scope2, b comes from scope 1 and c comes from main
			 * Thus, the result is a - 10, b - 5, c - 3
			 **/
		}

		scope3 := func() {
			c := 20
			fmt.Println("In scope 3: a -", a, " b -", b, " c -", c) // a - 1, b - 5, c - 20
			/* Go has static scope, thus it will look for the parent functions of scope3.
			 * Therefore, b comes from scope1, a and c come from main.
			 * Thus, the result is a - 1, b - 5, c - 3
			 **/
		}

		scope2()
		scope3()
		scope5()
		fmt.Println("In scope 1: a -", a, " b -", b, " c -", c) // a - 1, b - 5, c - 3
		/* Go has static scope, thus it will look for the parent functions of scope1.
		* Therefore, b comes from scope1, a comes from main and c comes from scope3
		* Thus, the result is a - 1, b - 5, c - 20
		**/
	}

	fmt.Println("In main: a -", a, " b -", b, " c -", c) // a - 1, b - 2, c - 3
	scope1()
	scope5()
	fmt.Println("In main: a -", a, " b -", b, " c -", c)
	// a - 1, b - 2, c - 3
	// Global variables did not change. That means, local variables with the same name
	// of a global variables do not change the value of the global variables.
	fmt.Println("**********************************************")

	fmt.Println("********** Parameter passing methods **********")
	// Call by Value
	var1 := 10
	modify1 := func(x int) { x = x * 5 }            // It multiplies the given integer with 5
	fmt.Println("Before modify1 call var1: ", var1) // 10
	modify1(var1)                                   // It is call by value because var1's value did not change.
	fmt.Println("After modify1 call var1: ", var1)  // 10

	// Call by Reference
	modify2 := func(x *int) { *x = *x * 5 }         // It multiplies the given with 5
	fmt.Println("Before modify2 call var1: ", var1) // 10
	modify2(&var1)                                  // It is call by reference because var1's value changed
	fmt.Println("After modify2 var1: ", var1)       // 50
	fmt.Println("***********************************************")

	fmt.Println("********** Keyword and default parameters **********")
	keyword1 := func(a int, b int) int { return a + b }
	//keyword2 := func(a int, b = 10 int, c = 5 int) {fmt.Println("keyword2:", a + b + c)} It does not work
	//fmt.Println(keyword1( b = 30, a = 40)) It does not work
	fmt.Println(keyword1(10, 20)) // It only work in this form
	//keyword2(10) keyword2 is not working so we can not call it
	fmt.Println("****************************************************")

	fmt.Println("********** Closures **********")
	// A simple closure
	// It return a func with a message
	closure1 := func() func() {
		return func() { fmt.Println("You have reached the returned function") }
	}

	closure2 := closure1()
	// Now closure2 is equal to func() { fmt.Println("You have reached the returned function") }
	// if we call closure2, it will print "You have reached the returned function"
	closure2()

	// Another closure example
	// The return type must be a func with 2 int paramters and an int.
	// Because Go adds the all return types to the parent function if parent function has a func in its return.
	closure3 := func() func(int, int) int {
		inner := func(a int, b int) int { return a + b }
		// inner function takes 2 int and sum them up and return it.
		return inner
	}

	closure4 := closure3()
	// Now closure 4 is equal to inner.
	// Therefore, if we call it in println, it will print a + b.
	fmt.Println(closure4(10, 20)) // it prints 30 because 10 + 20 = 30

	// Another closure example
	// Outer function takes an int value
	// The inner function takes another int value
	// And subtract the inner’s int from outer’s int
	closure5 := func(a int) func(int) int {
		return func(b int) int { return a - b }
	}

	closure6 := closure5(100)
	// closure6 is now equal to inner function
	fmt.Println(closure6(101))
	// It will print -1 because 100 - 101 = -1.
	fmt.Println(closure6(102))
	// It will print -2 because 100 - 102 = -2
	// Therefore, closure stores the first value and uses it in other operations.

	fmt.Println("******************************")
}
