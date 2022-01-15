 void main() {
  
  print( "********** Question 1 **********");
  //bool boolean1 = 1;
  //bool boolean2 = "ab";
  bool boolean3 = true;
  bool boolean4 = false;
  print( "********************************");
  
  print( "********** Question 2 **********");
  print( "********************************");
  
  print( "********** Question 3 **********");
  boolFunction1() {
    print( "boolFunction1 returns true");
    return true;
  }
  
  boolFunction2() {
    print( "boolFunction2 return false");
    return false;
  }
  
  // It only prints false
  print( false && boolFunction1()); 
  print( "----------");
  // It calls boolFunction1 and prints the result 
  print( true && boolFunction1()); 
  print( "----------");
  // It only prints false
  print( true || boolFunction2());
  print( "----------");
  // It calls boolFunction2 and prints the result
  print( false || boolFunction2());
  print( "********************************");
   
  print( "********** Question 4 **********");
  time1() {
    var a = 0;
    for ( var i = 0; i < 1000000; i++ ) {
      a = a + i;
    }
    return false;
  }
   
  var stopwatch = Stopwatch()..start();
  if ( time1() || time1() || time1() || time1() || time1() || time1() || time1() || time1() || time1() || true ) {
    print( "without short circuit");
  }
  //stopwatch.stop();
  print( "Elapsed time: ${stopwatch.elapsed}");
   
  var stopwatch2 = Stopwatch()..start();
  if ( true || time1() || time1() || time1() || time1() || time1() || time1() || time1() || time1() || time1() ) {
    print( "with short circuit");
  }
  print( "Elapsed time: ${stopwatch2.elapsed}");
  print( "********************************");
   
  print( "********** Question 5 **********");
  var value = 0;
  
  helper3() {
    value = 10;
    print( "helper3 assigns value to 10 and returns true");
    return true;
  }
   
  if (true || helper3()) {
    var a = value * 2;
    print( "a: $a");
  }
  print( "********************************");

}


