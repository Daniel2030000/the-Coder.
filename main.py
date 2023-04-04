# import math is a module and gives all the math methods availbe
# math.acos() use the dot operator to acces all the math methods in the math module
# printing on the terminal
print('Daniel')
print("You are the chosen one of God")

# getting input from the user
name = input('What is your name? ')
fav_color = input('What is your favorite color? ')
print('Hi, I am ' + name + ' and '+ fav_color + ' is my favorite color');

# type conversion
birth_year = input('Birth year? ')
age = 2023 - int(birth_year) # int function converts string to an integer
print(type(age)) # prints the type of variable
print('You are '+ str(age)+ 'years old')

# task
weight_lbs = input('What is your weight? ')
weight_kgs = int(weight_lbs) * 0.45;
print('You are ' + str(weight_kgs) + 'kgs');

# strings
course = "Python's Course for beginners"
print(course[0]) # to get first character and so on
print(course[-1]) # gets the character from the end of the string
print(course[0:3]) # grabs characters from 0 to 3

# formatted strings
first_name = 'Daniel'
last_name = 'Baraka'
# print(first_name + last_name + ' is a coder') # string concertination
print(f'{first_name} {last_name} is a coder')# formatted strings

# string methods
full_name = 'Daniel Baraka'
print(len(full_name))
print(full_name.upper()) # use the dot operator to acces all the string methods
print(full_name.find('a')) # returns the index of the letter given and its case sensitive
print(full_name.replace('Daniel', 'His Excellency')) # can also be used fo specific letters
print('Daniel' in full_name) # checks if the name appears in variable full_name and produces a boolean expression
# arithmetic operators
print(10 + 3) # applies to all the other maths operators
print(10 ** 3) # retuns the 10 to power 3

# argumented assignment operator
x = 10
# x = x + 3
x += 3 # applies to all the other maths operators
print(x)

# math functions
x = 2.9
print(round(x))
print(abs(-2.9)) # absolute function always returns a positive number