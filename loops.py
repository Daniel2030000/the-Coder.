i = 1
while i <= 10:
    print('What the hell!')
    i = i + 1

# calculator
multiplier = 5
j = 0
while j <= 10:
    print(f'{multiplier} * {j} = {multiplier * j}')
    j = j + 1

# also
Multiplier = int(input('Enter number: '))
k = 0
while k <= 20:
    print(f'{Multiplier} * {k} = {Multiplier * k}')
    k = k + 1

# guessing game
secret_num = 9
guess_count = 0
guess_limit = 3
while guess_count < guess_limit:
    guess = int(input('Guess: '))
    guess_count += 1
    if guess == secret_num:
        print('You won!')
        break
else:
    print('Try again!')

# for loops
for item in 'Python':
    print(item)

for items in ['Dan','Mosh','Java']: # [] used to define a list
    print(items)

for num in range(10): # range gives a range of functions
    print(num)

for nums in range(5, 10): # prints from 5 to 10
    print(nums)

for number in range(5, 10, 2): # from 5 it jumps 2  and prints 7 in that order
    print(number)

# task
# calculate total cost of items in a market using a for loop
price = [10, 20, 30]
total = 0
for i in price:
    total += i
print(f'Total: {total}')

# nested loops adding one loop inside another loop
# generating a list of coordinates
for x in range(4):
    for y in range(3):
        print(f'({x}, {y})')

# maths table
for i in range(10):
    for j in range(10):
        print(f'{i} * {j} = {i * j}')

# math table where the user enters the multiplier
multiplier = int(input('Enter multiplier: '))
for k in range(10):
    print(f'{multiplier} * {k} = {multiplier * k}')