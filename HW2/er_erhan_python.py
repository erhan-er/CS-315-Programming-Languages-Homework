import time
print( "********** Question 1 **********")
class object1:
	def __len__(self):
		return 0
		
class object2:
	def __len__(self):
		return 5
		
class object3:
	def __len__(self):
		return True
		
class object4:
	def __len__(self):
		return False
		
newObject1 = object1()
newObject2 = object2()
newObject3 = object3()
newObject4 = object4()

print( True)
print( False)
print( bool(5))
print( bool(0))
print( bool(""))
print( bool("cs315"))
print( bool([]))
print( bool(["cs", "315"]))
print( bool({}))
print( bool({3, 1, 5}))
print( None)

print( bool(newObject1))
print( bool(newObject2))
print( bool(newObject3))
print( bool(newObject4))


print( "********************************")

print( "********** Question 2 **********")
# Short Circuit operations
# and, or
# <, <=, >, >= 
# I showed them in the question 3
print( "********************************")

print( "********** Question 3 **********")
def helper():
	print("Helper function returns true")
	return True

# It does not call helper 
# because of false
# the result is already found
print( False and helper())
print( "----------")

# It calls helper
# becasue of true
# it also needs to check the other side of and
print( True and helper())
print( "----------")

# It does not call helper
# because of true
# the result is already found
print( True or helper())	
print( "----------")

# It calls helper
# because of false
# it also needs to check the other side
print( False or helper())
print( "----------")

def helper2(i):
	print( "helper2 returned ", i)
	return i

# When <, <=, >=, > see false in the first comparison
# it will stop the execution of the rest
print( 10 > 15 > helper2(5))
print( "----------")

print( 10 >= 15 >= helper2(5))
print( "----------")

print( 15 < 10 > helper2(5))
print( "----------")

print( 15 <= 10 <= helper2(5))
print( "----------")

print( 10 != 10 != helper2(5))
print( "----------")

print( 10 == 5 == helper2(5))
print( "----------")

print( "********************************")

print( "********** Question 4 **********")
def timer():
    a = 0
    for i in range(0, 1000000):
        a = a + 1;
    return False

start = time.time()
if ( timer() or timer() or timer() or timer() or timer() or timer() or timer() or timer() or True ):
    print( "without short circuit")
end = time.time()
print( "Elapsed Time: ", end - start)

start = time.time()
if ( True or timer() or timer() or timer() or timer() or timer() or timer() or timer() or timer() ):
    print( "with short circuit")
end = time.time()
print( "Elapsed Time: ", end - start)

print( "********************************")

print( "********** Question 5 **********")

value = None
def helper3():
    global value 
    value = 5
    print( "helper3 assigns value to 5 and returns true")
    return True

if (True or helper3()):
    # This will give error
    # Because of true,
    # "or" do not call helper3
    # this means "none * 5" will be assigned to "a"
    # but "none * 5" is not a defined operation in python.
    # Therefore, it will break the program.
    #a = value * 5
    #print( "a: ", a)
    print( "end")
print( "********************************")