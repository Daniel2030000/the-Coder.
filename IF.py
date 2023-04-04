# if statements
is_hot = False
is_cold = True
if is_hot:
    print('It is a hot day')
    print('Drink plenty of water')
elif is_cold:
    print("It is a cold day")
    print('Wear warm clothes')
else:
    print('It is a lovely day')
print('Enjoy your day')

# task
# price of a house is $1M
# if buyer has good credit they need to put down 10%
# otherwise they need to put down 20%
# print the down payment
good_credit = False
price = 1000000
if good_credit:
    print(f' the down payment is: ${price * 0.1}')
else:
    print(f'the down payment is: ${price * 0.2}')

# logical operators
# task
# if applicant has high income AND good credit Eligible for load; both conditions have to be true
high_income = True
Good_credit = True
if high_income and Good_credit:
    print('Applicant eligible for loan')
else:
    print('Not eligible for loan')

# if applicant has high income OR good credit Eligible for load; atleast one but not both conditions have to be true
High_income = True
good_Credit = False
if High_income or good_Credit:
    print('Applicant eligible for loan')
else:
    print('Applicant not eligible for loan')

# summary
# AND: both condition have to be true
# OR: at least one condition need to be true
# NOT; inverse if condition is true it inverses it to false
# if applicant has good credit AND does not have criminal record then they are eligible for loan
has_good_credit = True
has_criminal_record = True # if false we have two trues and positive results are returned
if has_good_credit and not has_criminal_record:
    print('Eligible for loan')
else:
    print('Not eligible for loan')

# comparison operators
# if temperature is greater than 30 print it is a hot day
# otherwise if it is less than 10 print it is a cold day
# otherwise print it is neither hot not cold
temp = 4
if temp > 30:
    print("It is a hot day!")
elif temp < 10:
    print('It is a cold day')
else:
    print('It is neither hot not cold')

temperature = int(input('Enter your current temperature: '))
if temperature > 30:
    print('It is a hot day!')
elif temperature < 10:
    print('It is a cold day!')
else:
    print("It is neither hot not cold")

# task
# if name is less than 3 characters long print name must be at least 3 characters long
# otherwise it it is more than 50 characters long print name can be a maximum of 50 characters
# otherwise print name looks good

name = input('Enter name: ')
# name = 'da';
if len(name) < 3:
    print('Name can be at least 3 characters long!')
elif len(name) > 50:
    print('Name can be a maximum of 50 characters!')
else:
    print('Name looks good!')

# user enters weight the program asks if its in kgs or lbs the converts it to the corresponding units
weight = int(input('Enter weight: '))
units = input('(l)bs or (K)g: ')
if units.upper() == 'L':
    print(f' You are {weight * 0.45}lbs')
elif units == 'K':
    print(f' You are {weight/0.45}kgs')
