name = ['Daniel', 'Baraka', 'Mosh', 'Sarah', 'Ken']
print(name)
print(name[0]);
print(name[2:]) # selects a sequence of characters

# modifying an element
name[0] = 'Ken'
print(name)

# finding the largest number in list
numbers = [3, 6, 2, 8, 30, 10]
max = numbers[0]
for number in numbers:
    if(number > max):
        max = number
print(f'The largest number is: {max}')

# 2D lists each item in that list is another list
matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]
matrix[0][1] = 20 # modifying elements in matrix
print(matrix[0][1]) # returns 2
# getting all elements in the array
for row in matrix:
    for item in row:
        print(item)

# list methods
nums = [5, 2, 1, 7, 4]
nums.append(3) # adds a new number to the list
print(nums)
nums.insert(0, 6) # inserts the value at the beginning of the list
print(nums)
# use the dot operator to access all the list methods
# pop() removes the last item
print(50 in nums) # checks for the existance of an item in the list
nums.sort()
nums.reverse() # sort elements in descending order
print(nums)

# write a program to remove the duplicates in list
numbers = [2, 2, 4, 6, 3,4, 6, 1]
uniques = []
for num in numbers:
    if num not in uniques:
        uniques.append(num)
print(uniques)

# tuples = we cannot modify them they are immutable
no = (1, 2, 3)
print(no[0])

# unpacking used in lists and also in tuples
coordinates = (1, 2, 3)
# x = coordinates[0]
# y = coordinates[1]
# z = coordinates[2]

x, y, z = coordinates
print(x)