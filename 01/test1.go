package main

import "fmt"

func main() {
	fmt.Println("Hello, my name is Edgar", 2 + 2, len("ABCDE"), "FGHIJ"[1])
	fmt.Println(true && true)
	fmt.Println(true && false)
	fmt.Println(true || true)
	fmt.Println(true || false)
	// fmt.Println(false ^ false)
	// fmt.Println(false ^ true)
	// fmt.Println(true ^ false)
	// fmt.Println(true ^ true)
	fmt.Println(!false)
	fmt.Println(!true)
	var x, y string
	fmt.Println((true && false) || (false && true) || !(false && false))
	x = "String X"
	fmt.Println(x)
	x = "String Y"
	fmt.Println(x)
	y = "String Y2"
	fmt.Println(y)
	fmt.Println(x == y)
	f()
	read()
	arrays()
}


func f(){
	var z string;
	z = "String Z"
	fmt.Println(z)

	const a string = "String A";
	fmt.Println(a)
	// a = "String B"
	fmt.Println(a)

	var (
		d string = "String D"
		e string = "String E"
		f string = "String F"
	)

	fmt.Println(d)
	fmt.Println(e)
	fmt.Println(f)
}

func read() {
	fmt.Print("Enter a number: ")
	var input float64
	fmt.Scanf("%f", input)

	output := input * 2
	fmt.Println(output)
}

func arrays() {
	var x [5]int;
	x[4] = 100
	fmt.Println(x)
}