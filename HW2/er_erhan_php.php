<?php
print "********** Question 1 ********** \n";
var_dump((bool) true);      //bool(true)
var_dump((bool) false);     //bool(false)
var_dump((bool) 0);         //bool(false)
var_dump((bool) "0");       //bool(false)
var_dump((bool) "");        //bool(false)
var_dump((bool) "cs315");   //bool(true)
var_dump((bool) 315);       //bool(true)
var_dump((bool) -1);        //bool(true)
var_dump((bool) []);        //bool(false)
var_dump((bool) [1, 2, 3]); //bool(true)
var_dump((bool) NULL);      //bool(false)
var_dump((bool) 0.0);       //bool(false)
var_dump((bool) -0.0);      //bool(false)
var_dump((bool) 1.5);       //bool(true)
print "******************************** \n";

print "********** Question 3 ********** \n";
function helper1() {
    echo "helper1 returns true \n";
    return true;
}

/* It will not call helper1
 * Because of false,
 * result is already decided
 **/
var_dump(false && helper1());
print "---------- \n";

/* It will call helper1
 * Because of true,
 * it needs to check the other side as well
 **/
var_dump(true && helper1());
print "---------- \n";

/* It will not call helper1
 * Because of false,
 * result is already decided
 **/
var_dump(false and helper1());
print "---------- \n";

/* It will call helper1
 * Because of true,
 * it needs to check the other side as well
 **/
var_dump(true and helper1());
print "---------- \n";

/* It will not call helper1
 * Because of true,
 * result is already decided
 **/
var_dump(true || helper1());
print "---------- \n";

/* It will call helper1
 * Because of false,
 * it needs to check the other side as well
 **/
var_dump(false || helper1());
print "---------- \n";

/* It will not call helper1
 * Because of true,
 * result is already decided
 **/
var_dump(true or helper1());
print "---------- \n";

/* It will call helper1
 * Because of false
 * it needs to check the other side as well
 **/
var_dump(false or helper1());
print "---------- \n";
print "******************************** \n";

print "********** Question 4 ********** \n";
function timer() {
    $a = 0;
    for ($i = 0; $i < 1000000; $i++) {
        $a = $a + 1;
    }
    return false;
}

$startTime = microtime(true);
if ( timer() || timer() || timer() || timer() || timer() || timer() || timer() || timer() || timer() || true ) {
    echo "without short circuit \n";
}
$endTime = microtime(true);
print "Elapsed time: ";
var_dump($endTime - $startTime);

$startTime = microtime(true);
if ( true || timer() || timer() || timer() || timer() || timer() || timer() || timer() || timer() || timer() ) {
    echo "with short circuit \n";
}
$endTime = microtime(true);
print "Elapsed time: ";
var_dump($endTime - $startTime);
print "******************************** \n";

print "********** Question 5 ********** \n";
$value = NULL;
function helper2() {
    global $value;
    $value = 5;
    echo "helper2 assigns value to 5 and returns true \n";
    return true;
}

if ( true || helper2() ) {
    
    $a = $value * 2;
    print "a: ";
    var_dump($a);
    if ( $a == 10 )
        exit;
// Because a is not assigned to 10 from value * 2 
// The program will not stop if this was in a menu or a loop.

}
print "******************************** \n";

?>
